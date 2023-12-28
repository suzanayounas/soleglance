<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function ChangePassword(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
//        dd($validator->messages());
        if ($validator->fails()) {
            return redirect()->back()->with('error', "You have an error in change password tab")
                ->withErrors($validator)
                ->withInput();
        }


        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->oldpassword, $hashedPassword)) {

            if (!Hash::check($request->password, $hashedPassword)) {

                $users = User::find(Auth::user()->id);
                $users->password = $request->password;
                $user = User::where('id', Auth::user()->id)->update(array('password' => $users->password));
                return redirect()->back()->with('success', "Password Change successfully");
            } else {
                return redirect()->back()->with('error', "New password can not be the old password!");
            }
        } else {
            return redirect()->back()->with('error', "Old password doesnt matched");
        }
    }

    public function updateProfile(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
//            'photo' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'martial_status' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find($id);
        $user->update([
            'name' =>$request->user_name,
            'email' => $request->email,
        ]);

//         dd($request->all());
        $userInfo = UserInformation::where('user_id',$id)->first();

        $dbData = [
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
             'gender' => $request->gender,
            'dob' => dateInsert($request->dob),
             'martial_status' => $request->martial_status,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
         ];

        $userInfoResponse = $userInfo->update($dbData);


        if (isset($userInfoResponse)) {

            if ($request->hasFile('photo')) {

                $filename = uploadImage($request->file('photo'), 'profile');

                $userInfo->update(['photo' => $filename]);
            }


            return redirect()->route('home')->with('success', 'Profile Updated Successfully');

        } else {

            return redirect()->route('home')->with('error', 'Some thing Went Wrong');

        }

    }

}
