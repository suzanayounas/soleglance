<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
Route::put('change-password{id}', [AdminController::class, 'ChangePassword'])->name('change-password');
Route::put('profile{id}', [AdminController::class, 'updateProfile'])->name('update-profile');


Route::get('/profile', [HomeController::class, 'index'])->name('profile');

Route::get('/friend-profile', [HomeController::class, 'friendProfile'])->name('friend-profile');


Route::get('/chat', [HomeController::class, 'chat'])->name('chat');
Route::get('/sentiments', [HomeController::class, 'sentiments'])->name('sentiments');
Route::get('/trendings', [HomeController::class, 'trendings'])->name('trendings');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

// Posts
Route::get('/home', [PostController::class, 'newFeed'])->name('home');
Route::post('/post-submit', [PostController::class, 'postSubmit'])->name('post-submit');

// Post Reactions
Route::post('/post-reaction', [PostController::class, 'postReaction'])->name('post-reaction');



// search bar
Route::get('search/', [PostController::class, 'search'])->name('search');

// Friend Request
Route::post('sendFriendRequest', [FriendController::class, 'sendFriendRequest'])->name('sendFriendRequest');
Route::post('unfriendRequest', [FriendController::class, 'unfriendRequest'])->name('unfriendRequest');
Route::get('/friend-request', [FriendController::class, 'friendRequest'])->name('friend-request');
Route::post('acceptFriendRequest/{friendId}', [FriendController::class, 'acceptFriendRequest'])->name('acceptFriendRequest');
Route::post('rejectFriendRequest/{friendId}', [FriendController::class, 'rejectFriendRequest'])->name('rejectFriendRequest');

Route::get('/notification', [FriendController::class, 'notification'])->name('notification');
// Friend List
Route::get('/friend-list', [FriendController::class, 'friendList'])->name('friend-list');

// Getting user profile
Route::get('/@{name}/{id}', [FriendController::class, 'getUserProfile'])->name('user-profile');