<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ServiceOrderSeeder;
use App\Models\Message;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            ServiceOrderSeeder::class,
            ProjectSeeder::class,
            PhotoResultsSeeder::class,
            VideoResultsSeeder::class
        ]);

        Message::create([
            'sender_id' => 1,
            'receiver_id' => 2,
            'message_content' => 'Hello User2!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Message::create([
            'sender_id' => 2,
            'receiver_id' => 1,
            'message_content' => 'Hi User1!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
