<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Lie, Samuel',
            'gender' => 'Male',
            'phoneNumber' => '0812345',
            'city' => 'Semarang',
            'description'=>'WOWWWWW',
            'country' => 'Indonesia',
            'profilePicture' => null,
            'email' => 'admin_cg@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('adminCaptureGrounds'),
            'isLogin' => '0',
            'isActive' => '1',
            'isMembership' => '0',
            'role_id' => 1,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Joren',
            'gender' => 'Male',
            'phoneNumber' => '0812345',
            'city' => 'Surabaya',
            'description'=>'wow',
            'country' => 'Indonesia',
            'profilePicture' => null,
            'email' => 'worker_cg@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('workerCaptureGrounds'),
            'isLogin' => '0',
            'isActive' => '1',
            'isMembership' => '0',
            'role_id' => 2,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Louis Fernando',
            'gender' => 'Male',
            'phoneNumber' => '0812345',
            'city' => 'Surabaya',
            'country' => 'Indonesia',
            'profilePicture' => null,
            'email' => 'customer_cg@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('customerCaptureGrounds'),
            'isLogin' => '0',
            'isActive' => '1',
            'isMembership' => '0',
            'role_id' => 3,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Patrick',
            'gender' => 'Male',
            'phoneNumber' => '9331456',
            'city' => 'Surabaya',
            'description' => "DAMN!",
            'country' => 'Indonesia',
            'role_id' => 3, // DI USER FACTORY ROLENYA 3, member
            'isLogin' => '0',
            'isActive' => '1',
            'email' => 'patrick@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('patrictganteng'),
            'isMembership' => false,
            'profilePicture' => null,
            'remember_token' => Str::random(10),
        ]);

        // User::factory(3)->create();
    }
}
