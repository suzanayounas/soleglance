<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'photo',
        'gender',
        'dob',
        'martial_status',
        'country',
        'state',
        'city',
        'address',

    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
