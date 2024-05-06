<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Professional Event Photography',
            'image' => 'serviceExample.png',
            'description' => 'Capture your event beautifully with professional photography services. High-quality images delivered promptly.',
            'price' => 800000,
            'user_id' => 2
        ]);
    }
}
