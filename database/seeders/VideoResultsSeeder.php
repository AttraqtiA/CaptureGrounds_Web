<?php

namespace Database\Seeders;

use App\Models\VideoResults;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoResults::create([
            'project_id'=> 1,
            'url' => 'videoResultExample.mp4'
        ]);
    }
}
