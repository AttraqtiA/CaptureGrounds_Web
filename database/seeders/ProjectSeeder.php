<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Grace Engagement Event',
            'description' => "Grace engagement event is an occasion designed to celebrate and honor the upcoming union of two individuals, typically filled with warmth, joy, and heartfelt congratulations as friends and family come together to share in the couple's love and commitment.",
            'date' =>  '2024-04-12',
            'workDuration' => '02:40:50',
            'location' => 'Surabaya',
            'user_id' => 3,
            'serviceOrder_id' => 1
        ]);
    }
}
