@extends('layouts.app')

@section('content_page')

<section class="pt-12 w-full bg-white">
    <div class="bg-black p-10">
        <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png" alt="Profile Picture" class="w-32 h-32 mx-auto rounded-full mb-8 lg:float-left lg:mb-0 border-4 border-yellow-400">
        <div class="text-center lg:text-left p-4 lg:pl-4 lg:pr-8"> <!-- Adjusted padding-left to lg:pl-4 -->
            <h2 class="text-3xl font-bold text-yellow-400">Hi John Doe,</h2>
            <p class="text-lg text-white ">rawdog@gmail.com</p>
            <p class="text-lg text-white">Berkley</p>
        </div>
    </div>
    <div class="p-9">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

            <div class="col-span-2 lg:col-span-1 bg-white rounded-lg p-8 mb-4">
                <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                    <p class="text-3xl font-bold text-yellow-400">Description</p>
                    <p class="text-1xlfont-bold text-black mb-4">The art of looking at the shooting stars is more than enough for me</p>
                </div>
                <!-- Stats Section -->
                <div class="mb-8">
                    <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                    <h3 class="text-3xl font-bold text-black text-center mb-4">Your <span class="text-yellow-400">Stats</span></h3>

                    <!-- Stats Grid -->

                        <!-- Favorite Photographer -->
                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Favorite Photographer</p>
                            <p class="text-lg font-bold text-white text-center">Silvia :3</p>
                        </div>

                        <!-- Currently Project -->
                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Currently Project</p>
                            <p class="text-lg font-bold text-white text-center">Sam’s Birthday Event</p>
                        </div>

                        <!-- Usage Experience -->
                        <div class="grid grid-cols-2 lg:grid-cols-2 gap-4">
                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Usage Experience</p>
                            <p class="text-lg font-bold text-white text-center">2 years</p>
                        </div>

                        <!-- Total Projects -->
                        <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                            <p class="text-lg font-bold text-yellow-400 text-center">Total Projects</p>
                            <p class="text-lg font-bold text-white text-center">40</p>
                        </div>
                        </div>
                    </div>

                        <!-- Description -->

                </div>
                <!-- Search Bar Section -->

                    <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                    <input type="text" placeholder="Search..." class="w-full bg-white mt-4 px-4 py-2 rounded-lg focus:outline-none">
                </div>
            </div>

            <!-- Trending Section -->
            <div class="col-span-2 lg:col-span-1 bg-white rounded-lg shadow-md p-3 mb-4">
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-black">Trending</h2>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-yellow-400">Videographers & PhotoGraphers</h2>
                </div>
                <div class="flex flex-wrap justify-center lg:flex-col">
                    <div class="container mx-auto flex flex-col lg:flex-row">
                        <div class="w-full lg:w-1/2 mb-4">
                            <div class="bg-black rounded-lg shadow-md pb-5">
                                <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png" alt="Trending Picture" class="w-full h-48 object-cover rounded-t-lg mb-4">
                                <div class="p-4">
                                <h3 class="text-xl font-bold text-center text-yellow-400">Silvia-Photographer</h3>
                                <p class="text-white font-bold text-center pb-4">Description of Silvia goes here...</p>
                            </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
