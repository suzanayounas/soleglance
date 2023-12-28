<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Notifications\FriendRequestNotification;
use App\Notifications\AcceptedFriendNotification;
use App\Models\Friend;
use App\Models\User;
use Auth;
use DB;

class FriendController extends Controller
{
    //
    public function sendFriendRequest(Request $request){
        // dd($request->all());

        $user = Auth::user();
        $friend = User::find($request->friendID);
        // dd($friend);
        if (!$friend) {
            return redirect()->back()->with('error', 'Friend not found.');
        }
    
        $friendship = Friend::where(function ($query) use ($user, $friend) {
            $query->where('user_id', $user->id)
                  ->where('friend_id', $friend->id);
        })->orWhere(function ($query) use ($user, $friend) {
            $query->where('user_id', $friend->id)
                  ->where('friend_id', $user->id);
        })->first();
    
        if ($friendship) {
            return redirect()->back()->with('error', 'Friend request already sent.');
        }
    
        $friendship = new Friend;
        $friendship->user_id = $user->id;
        $friendship->friend_id = $friend->id;
        $friendship->status = 'pending';

       // Check if there are any pending notifications for the user
        $existingNotification = DB::table('notifications')
        ->where('notifiable_id', $friend->id)
        ->where('type', 'App\Notifications\FriendRequestNotification')
        ->where('data->sender_id', $user->id)
        ->whereNull('read_at')
        ->first();
    
        if($existingNotification == null){
            // Send notification to the friend
            Notification::send($friend, new FriendRequestNotification($user));
        }

        $friendship->save();

        return redirect()->back()->with('success', 'Friend request sent.');
    }

    public function unfriendRequest(Request $request) {
        $user = Auth::user();
        $friend = User::find($request->friendID);
    
        if (!$friend) {
            return redirect()->back()->with('error', 'Friend not found.');
        }
    
        $friendship = Friend::where(function ($query) use ($user, $friend) {
            $query->where('user_id', $user->id)
                ->where('friend_id', $friend->id);
        })->orWhere(function ($query) use ($user, $friend) {
            $query->where('user_id', $friend->id)
                ->where('friend_id', $user->id);
        })->first();
    
        if (!$friendship) {
            return redirect()->back()->with('error', 'Friendship not found.');
        }
    
        $friendship->delete();
    
        $friendship2 = Friend::where(function ($query) use ($user, $friend) {
            $query->where('user_id', $friend->id)
                ->where('friend_id', $user->id);
        })->orWhere(function ($query) use ($user, $friend) {
            $query->where('user_id', $user->id)
                ->where('friend_id', $friend->id);
        })->first();
    
        if ($friendship2) {
            $friendship2->delete();
        }
    
        return redirect()->back()->with('success', 'Unfriended successfully.');
    }
    


    public function friendRequest()
    {
        $friendRequests = Auth::user()->friendRequestsReceived;

        // dd($friendRequests);
        return view('friendRequest', ['friendRequests' => $friendRequests]);
    }

    public function acceptFriendRequest($friendId){
        $friend = User::findOrFail($friendId);
    
        $existingFriendRequestFromUser = Friend::where('user_id', Auth::user()->id)
                                ->where('friend_id', $friendId)
                                ->first();
    
        $existingFriendRequestFromFriend = Friend::where('user_id', $friendId)
                                ->where('friend_id', Auth::user()->id)
                                ->first();
    
        if($existingFriendRequestFromUser) {
            $existingFriendRequestFromUser->status = 'accepted';
            $existingFriendRequestFromUser->save();
    
            if ($existingFriendRequestFromFriend) {
                $existingFriendRequestFromFriend->status = 'accepted';
                $existingFriendRequestFromFriend->save();
            } else {
                $friendRequest = new Friend;
                $friendRequest->user_id = $friendId;
                $friendRequest->friend_id = Auth::user()->id;
                $friendRequest->status = 'accepted';
                $friendRequest->save();
            }
        } else {
            $friendRequest = new Friend;
            $friendRequest->user_id = Auth::user()->id;
            $friendRequest->friend_id = $friendId;
            $friendRequest->status = 'accepted';
            $friendRequest->save();
    
            if ($existingFriendRequestFromFriend) {
                $existingFriendRequestFromFriend->status = 'accepted';
                $existingFriendRequestFromFriend->save();
            } else {
                $friendRequest2 = new Friend;
                $friendRequest2->user_id = $friendId;
                $friendRequest2->friend_id = Auth::user()->id;
                $friendRequest2->status = 'accepted';
                $friendRequest2->save();
            }
        }
    
        $user = Auth::user();
        $friendRequestNotification = $user->notifications()
            ->where('type', 'App\Notifications\FriendRequestNotification')
            ->where('data->name', $friend->name)
            ->first();
      
        
        if ($friendRequestNotification) {
            $friendRequestNotification->delete();
        }

        Notification::send($friend, new AcceptedFriendNotification($user));
        Notification::send($user, new AcceptedFriendNotification($friend));


        return redirect()->back()->with('success', 'Accepted successfully.');
    }
    


    public function rejectFriendRequest($friendId){
        $friend = User::findOrFail($friendId);
        
        $friendRequest = Friend::where('user_id', $friendId)
                                ->where('friend_id', Auth::user()->id)
                                ->firstOrFail();
    
        $friendRequest->delete();
    

        $user = Auth::user();
        $friendRequestNotification = $user->notifications()
            ->where('type', 'App\Notifications\FriendRequestNotification')
            ->where('data->name', $friend->name)
            ->first();
      
        
        if ($friendRequestNotification) {
            $friendRequestNotification->delete();
        }

        return redirect()->back()->with('success', 'Rejected successfully.');
    }


    // Friend List
    public function friendList()
    {
        // $friends = Auth::user()->friends()->where('status', 'accepted')->with('friend')->get();
        $friends = Auth::user()->friends()->with('friend')->get();

        // dd($friends);
        return view('friendList',['friends' => $friends]);
    }

    public function notification()
    {
        return view('notification');
    }


    public function getUserProfile($name, $id)
    {
        $name = User::find($id);


        $userId = $id;

        $posts = DB::table('posts')
            ->leftJoin('post_media', 'posts.id', '=', 'post_media.post_id')
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->join('post_visibilities', 'posts.id', '=', 'post_visibilities.post_id')
            ->where('posts.user_id', $id) // filter posts by user ID
            ->where(function ($query) use ($userId) {
                $query->where('post_visibilities.viewer_id', $userId)
                    ->orWhere('post_visibilities.visibility_type', 'public')
                    ->orWhere(function ($query) use ($userId) {
                        $query->where('post_visibilities.viewer_id', $userId)
                            ->where('post_visibilities.visibility_type', 'onlyme');
                    })
                    ->orWhere(function ($query) use ($userId) {
                        $query->where('post_visibilities.visibility_type', 'friends')
                            ->whereIn('post_visibilities.viewer_id', function ($query) use ($userId) {
                                $query->select('friend_id')
                                    ->from('friends')
                                    ->where('user_id', '=', $userId)
                                    ->where('status', '=', 'accepted');
                            });
                    });
            })
            ->orderBy('posts.id', 'desc')
            ->select('posts.*', 'users.name', 'post_media.media_type', 'post_media.media_url', 'post_media.media_caption')
            ->get();
        // dd($posts);
        
        return view('friendProfile', ['posts' => $posts,'name'=>$name->name,'id'=>$id]);
    }

    
}