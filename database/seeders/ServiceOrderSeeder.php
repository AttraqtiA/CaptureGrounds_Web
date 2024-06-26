<?php

namespace Database\Seeders;

use App\Models\ServiceOrder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'yes',
            'finishedStatus' => 'yes',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' =>'2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);

        ServiceOrder::create([
            'startingDate' => '2024-04-12',
            'endingDate' => '2024-04-16',
            'totalPayment' =>  1000000,
            'note' => 'Kindly note that we expect you to capture the essence of our event with your expertise and creativity. Please ensure to highlight the unique moments and emotions throughout the occasion.',
            'acceptedStatus' =>  'no',
            'finishedStatus' => 'no',
            'user_id' => 3,
            'services_id' => 1
        ]);
    }
}
