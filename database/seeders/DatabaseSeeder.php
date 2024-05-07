<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

            // ProductionSeeder::class,
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
