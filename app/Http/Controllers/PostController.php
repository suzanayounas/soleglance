<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Reaction;
use App\Models\User;
use App\Models\Friend;
use App\Models\PostMedia;
use App\Models\post_visibility;
use App\Models\custom_visibility;
use App\Notifications\NewPostNotification;
use Image;
use Auth;
use DB;

class PostController extends Controller
{
    /**
    * @Route("/post-submit", name="post_submit", methods={"POST"})
    */

    public function newFeed()
    {
        $userId = Auth::id();

    $posts = DB::table('posts')
        ->leftJoin('post_media', 'posts.id', '=', 'post_media.post_id')
        ->leftJoin('users', 'posts.user_id', '=', 'users.id')
        ->join('post_visibilities', 'posts.id', '=', 'post_visibilities.post_id')
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

    foreach ($posts as $post) {
        $post->total_likes = Reaction::where('post_id', $post->id)->where('type', 'like')->count();
        $post->total_loves = Reaction::where('post_id', $post->id)->where('type', 'love')->count();
        $post->total_happys = Reaction::where('post_id', $post->id)->where('type', 'happy')->count();
        $post->total_hahas = Reaction::where('post_id', $post->id)->where('type', 'haha')->count();
        $post->total_thinks = Reaction::where('post_id', $post->id)->where('type', 'think')->count();
        $post->total_sades = Reaction::where('post_id', $post->id)->where('type', 'sade')->count();
        $post->total_lovely = Reaction::where('post_id', $post->id)->where('type', 'lovely')->count();

        $post->user_reaction = Reaction::where('post_id', $post->id)->where('user_id', $userId)->first();
        $post->all_user_reactions = Reaction::where('post_id', $post->id)->get();
    }
        // dd($posts);
        return view('newFeed', ['posts' => $posts]);
    }
    




    public function postSubmit(Request $request): Response
    {
        // dd($request->all());
        $rules = [
            'post_content' => ['required', 'min:3'],
        ];
        
        $this->validate($request, $rules);
        try {
            // Start a database transaction
            DB::beginTransaction();

            // Insert the new post into the database
            $post = new Post;
            $post->user_id = Auth::id();
            $post->post_content = $request->post_content;
            $post->post_date = now();
            $post->status = 1; 
            $post->save();


            // Insert the post visibility settings into the database
            
            $visibility_type = $request->visibility_type;

            // // Insert a row into the Post_Visibility table
            $post_visibility = new post_visibility;
            $post_visibility->post_id = $post->id;
            $post_visibility->viewer_id = Auth::id();
            $post_visibility->visibility_type = $visibility_type;
            $post_visibility->save();


            // If custom visibility is selected, insert the custom viewers into the Custom_Visibility table
            if ($visibility_type === 'custom') {
                $custom_viewers = $request->input('custom_viewers', []);
                foreach ($custom_viewers as $custom_viewer_id) {
                    $custom_visibility = new custom_visibility;
                    $custom_visibility->visibility_id = $post_visibility->id;
                    $custom_visibility->custom_viewer_id = $custom_viewer_id;
                    $custom_visibility->save();
                }
            }


            // Inser post media
            // Insert post media
            if ($request->hasFile('file-input')) {
                $file = $request->file('file-input');
                
                // Handle image upload
                if (strpos($file->getClientMimeType(), 'image') !== false) {
                    $imageName = $file->hashName();
                    $path = 'assets/images/post-media/' . $imageName;
                    
                    $file->move(public_path('assets/images/post-media/'), $imageName);
                    // dd('below');
                    $post_media = new PostMedia;
                    $post_media->post_id = $post->id;
                    $post_media->media_type = $file->getClientMimeType();
                    $post_media->media_url = $path;
                    $post_media->media_caption = $imageName;
                    $post_media->save();  
                }
                // Handle video upload
                elseif (strpos($file->getClientMimeType(), 'video') !== false) {
                    $videoName = $file->hashName();
                    $path = 'assets/images/post-media/videos' . $videoName;
                    
                    $file->move(public_path('assets/images/post-media/videos/'), $videoName);
                    
                    $post_media = new PostMedia;
                    $post_media->post_id = $post->id;
                    $post_media->media_type = $file->getClientMimeType();
                    $post_media->media_url = $path;
                    $post_media->media_caption = $videoName;
                    $post_media->save(); 
                }
            }
            
            // Notification send to the friends only
            // Retrieve the publisher's friends
           
            if($visibility_type == "public" || $visibility_type == "friends"){
                $friends = Friend::select('friend_id')
                    ->where('user_id', Auth::id())
                    ->where('status', 'accepted')
                    ->get();
               
                if($friends->isEmpty()){
                    // dd(Auth::id());
                    Notification::send(Auth::user(), new NewPostNotification($post));
                    
                }else{
                    // Convert the collection to an array of friend IDs
                    $friend_ids = [];
                    foreach ($friends as $friend) {
                        $friend_ids[] = $friend->friend_id;
                    }

                    // Send notifications to the publisher's friends
                    foreach ($friend_ids as $friend_id) {
                        $friend = User::find($friend_id);
                        if ($friend) {
                            $friend->notify(new NewPostNotification($post));
                        }
                    }
                    Notification::send(Auth::user(), new NewPostNotification($post));
                }
            }else{
                Notification::send(Auth::user(), new NewPostNotification($post));
            }
            // Commit the transaction if all records were saved successfully
            DB::commit();

            return redirect()->route('home')->with('success', 'Your post has been successfully publish!');
            
        }catch(\Exception $e) {
            // Roll back the transaction if any operation failed
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to publish your post.');
        }
    }

    public function search(Request $request){
        $users = DB::table('users')
            ->where('name', 'like', '%' . $request->search . '%')
            ->orWhere('email', 'like', '%' . $request->search . '%')
            ->get();
        
        // Get the authenticated user's friend list
        $friendList = Auth::user()->friends;
    
        foreach ($users as $user) {
            // Check if the current user is already a friend
            $isFriend = $friendList->contains('id', $user->id);
    
            // Add a new key 'isFriend' to the user object
            $user->isFriend = $isFriend;
        }
        
        // dd($users);
        return view("searchResult",['results'=>$users]);
    }
    
    // Functiont to return the user name
    public static function getUserName($user_id) {
        $user = User::find($user_id);
        return $user;
    }


    public function postReaction(Request $request)
{
    $reactionType = $request->reaction_type;

    $reaction = Reaction::where('post_id', $request->post_id)
        ->where('user_id', $request->user_id)
        ->first();

    if ($reaction) {
        // If the user has already reacted to the post, update the existing reaction
        if ($reaction->type != $request->reaction_type) {
            $reaction->type = $request->reaction_type;
            $reaction->save();
            return redirect()->route('home')->with('success', 'Reaction updated successfully');
        } else {
            return redirect()->route('home')->with('success', 'Already reacted with the same type of reaction');
        }
    } else {
        // If the user has not reacted to the post, create a new reaction
        $reaction = new Reaction;
        $reaction->user_id = $request->user_id;
        $reaction->post_id = $request->post_id;
        $reaction->type = $request->reaction_type;
        $reaction->save();
        return redirect()->route('home')->with('success', 'Reacted successfully');
    }
}

    
}