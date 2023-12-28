<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userInfo()
    {
        return $this->hasOne(UserInformation::class)->withDefault();
    }

    // public function friends()
    // {
    //     return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')
    //                 ->wherePivot('status', 'accepted');
    // }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')
            ->withPivot(['id', 'status']);
    }

    public function friend()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')
            ->withPivot(['id', 'status']);
    }

    public function customVisibilityIds()
    {
        return custom_visiblity::where('visibility_id', '=', $this->id)->pluck('custom_viewer_id')->toArray();
    }
    
    public function friendRequestsReceived()
    {
        return $this->hasManyThrough(
            User::class,
            Friend::class,
            'friend_id', // foreign key on the Friend model
            'id', // local key on the User model
            'id', // local key on the Friend model
            'user_id' // foreign key on the User model
        )->where('status', 'pending'); // filter by pending friend requests
    }
    

    public function friendRequestsSent()
    {
        return $this->hasMany(Friend::class, 'friend_id')
            ->where('status', 'pending');
    }

    
}
