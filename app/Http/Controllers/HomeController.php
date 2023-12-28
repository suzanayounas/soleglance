<?php

namespace App\Http\Controllers;

use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('signup');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userInfo = array();
        $userID = Auth::user()->id;
        $userInfo = UserInformation::with('user')->where('user_id',$userID)->first();
        //dd($userInfo);
        return view('home', compact('userInfo','userID'));
    }

    

    

    public function friendProfile()
    {
        return view('friendProfile');
    }

    
    public function chat()
    {
        return view('chat');
    }

    public function sentiments()
    {
        
        
        
        return view('sentiments');
    }
    public function trendings()
    {
        return view('trending');
    }


    public function admin()
    {
        return view('admin');
    }
}