@extends('layouts.app')

@section('content_page')

<section class="pt-12 w-full bg-white">
    <div class="bg-black p-10">
        <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png" alt="Profile Picture" class="w-32 h-32 mx-auto rounded-full mb-8 lg:float-left lg:mb-0 border-4 border-yellow-400">
        <div class="text-center lg:text-left p-4 lg:pl-4 lg:pr-8"> <!-- Adjusted padding-left to lg:pl-4 -->
            <h2 class="text-3xl font-bold text-yellow-400">Hi {{ $user->name }},</h2>
            <div class = "lg:text-right">
            <p class="text-lg text-white ">{{ $user->email }}</p>
            <p class="text-lg text-white">{{ $user->city }}, {{ $user->country }}</p>
            </div>
        </div>
    </div>
    <div class="p-9">
        <!-- Profile Section -->

        <!-- Stats and Search Bar Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2">

            <div class="col-span-2 lg:col-span-1 bg-white rounded-lg p-8 mb-4">
                <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                    <p class="text-3xl font-bold text-yellow-400">Description</p>
                    <p class="text-1xlfont-bold text-black mb-4">{{ $user->description }}</p>
                </div>

                <div class="mb-8">
                    <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                    <h3 class="text-3xl font-bold text-black text-center mb-4">Your <span class="text-yellow-400">Stats</span></h3>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Ratings</p>
                            <p class="text-lg font-bold text-white text-center">{{ $averagerating }}</p>
                        </div>

                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Favorite Services</p>
                            <p class="text-lg font-bold text-white text-center">{{ $mostprefferedservice->title }}</p>
                        </div>
                    </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Reviews</p>
                            <p class="text-lg font-bold text-white text-center">{{ $countrating }}</p>
                        </div>

                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Work Experience</p>
                            <p class="text-lg font-bold text-white text-center">{{ $experienceapp }}</p>
                        </div>
                        </div>
                    </div>

                </div>
                    <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                    <input type="text" placeholder="Search..." class="w-full bg-white mt-4 px-4 py-2 rounded-lg focus:outline-none">
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 bg-white rounded-lg shadow-md p-3 mb-4">
                <section style="background-image: url('/images/reinhart-julian-WxM465oM4j4-unsplash.png')"
                class="bg-cover bg-center bg-no-repeat bg-neutral-500 bg-blend-multiply rounded-md py-1 lg:py-1">
                <div class="px-4 mx-auto max-w-screen-xl text-center text-white">
                    <h2 class="text-center text-yellow-400 mb-10 lg:mb-10 mt-10 text-5xl font-medium">Add Portfolio!<br></h2>
                </div>
            </section>

                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-black">Your <span class="text-yellow-400">Services</span></h2>
                </div>
                <div class="flex justify-center mt-4">
                    <form method="GET" action="{{ route('create_service') }}">
                        <button type="submit" class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                            create
                        </button>
                    </form>
                </div>
                <div class="flex flex-wrap justify-center lg:flex-col">
                    <div class="container mx-auto flex flex-col lg:flex-row">
                        <div class="w-full lg:w-1/2 px-2 mb-4">

                            @foreach ($allservice as $ser)
                            <div class="bg-black rounded-lg shadow-md ">
                                <img src="{{ asset('storage/' . $ser['image']) }}" class="w-full h-48 object-cover rounded-t-lg mb-4">
                                <h3 class="text-xl font-bold text-center text-yellow-400 p-4">{{ $ser->title }}</h3>
                                <p class="text-white font-bold text-center p-2">{{ $ser->description }}</p>
                                <div class="flex space-x-4">
                                    <a href="{{ route('edit_service', $ser) }}">
                                        <button class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600" id="edit" name="edit">Edit</button>
                                    </a>
                                    <form action="{{ route('service_destroy', $ser) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 mt-2 md:mt-0" id="delete" name="delete">Delete</button>
                                    </form>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
