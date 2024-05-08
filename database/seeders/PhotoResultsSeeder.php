<?php

namespace Database\Seeders;

use App\Models\PhotoResults;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        photoresults::create([
            'project_id'=> 1,
            'url' => 'photoResultExample.jpg'
        ]);
    }
}
