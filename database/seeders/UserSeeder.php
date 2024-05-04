<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Samuel',
            'gender' => 'Male',
            'phoneNumber' => '0812345',
            'city' => 'Semarang',
            'country' => 'Indonesia',
            'role_id' => 1, // DI USER FACTORY ROLENYA 1, Admin
            'isLogin' => '0',
            'isActive' => '1',
            'email' => 'admin_cg@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('jorenganteng'),
            'isMembership' => true,
            'profilePicture' => null,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Yobel',
            'gender' => 'Male',
            'phoneNumber' => '7823542',
            'city' => 'Surabaya',
            'country' => 'Indonesia',
            'role_id' => 3, // DI USER FACTORY ROLENYA 3, member
            'isLogin' => '0',
            'isActive' => '1',
            'email' => 'yobel@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('yobelganteng'),
            'isMembership' => false,
            'profilePicture' => null,
            'remember_token' => Str::random(10),
        ]);

        // User::factory(3)->create();
    }
}
