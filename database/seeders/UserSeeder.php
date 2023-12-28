<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'role_id' => 1
        ]);

        UserInformation::create([
            'user_id' => $user->id,
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'gender' => 'm',
            'dob' => currentDateInsert(),
            'martial_status' => '',
            'country' => 'Pakistan',
            'state' =>'Islamabad',
            'city' => 'Islamabad',
            'address' => 'Islamabad',
            'photo' => '',
        ]);
    }
}
