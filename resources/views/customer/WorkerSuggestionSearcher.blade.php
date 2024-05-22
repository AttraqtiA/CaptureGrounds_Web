@extends('layouts.app')

@section('content_page')
<div class="container mx-auto min-h-screen w-full my-6 pt-20">
    <h1 class="text-4xl font-bold mb-6 text-center">Nearest Photographer and Videographer</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'city' => 'New York',
                'country' => 'USA',
                'description' => 'Experienced wedding photographer.',
                'profile_image' => 'images/profile1.png'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'city' => 'Los Angeles',
                'country' => 'USA',
                'description' => 'Specialist in fashion photography.',
                'profile_image' => 'images/profile2.png'
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael.johnson@example.com',
                'city' => 'Chicago',
                'country' => 'USA',
                'description' => 'Professional videographer for events.',
                'profile_image' => 'images/profile3.png'
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'city' => 'Houston',
                'country' => 'USA',
                'description' => 'Freelance nature photographer.',
                'profile_image' => 'images/profile4.png'
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@example.com',
                'city' => 'Phoenix',
                'country' => 'USA',
                'description' => 'Sports photography expert.',
                'profile_image' => 'images/profile5.png'
            ],
            [
                'name' => 'Sophia Brown',
                'email' => 'sophia.brown@example.com',
                'city' => 'Philadelphia',
                'country' => 'USA',
                'description' => 'Creative portrait photographer.',
                'profile_image' => 'images/profile6.png'
            ],
        ]
         as $worker)
        <div class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
            <div class="flex items-center space-x-4">
                <img src="{{ $worker['profile_image'] }}" alt="Profile Picture" class="w-16 h-16 rounded-full border-2 border-yellow-400">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">{{ $worker['name'] }}</h2>
                    <p class="text-gray-600">{{ $worker['email'] }}</p>
                    <p class="text-gray-600">{{ $worker['city'] }}, {{ $worker['country'] }}</p>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-gray-800">{{ $worker['description'] }}</p>
            </div>
            <div class="mt-4 text-center">
                <a href="{{ route('worker_profile', 2) }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded focus:outline-none">View Profile</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
