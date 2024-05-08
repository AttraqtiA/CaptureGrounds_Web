@extends('layouts.app')

@section('content_page')

<section class="pt-12 w-full bg-white">
    <div class="bg-black p-10">
        <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png" alt="Profile Picture" class="w-32 h-32 mx-auto rounded-full mb-8 lg:float-left lg:mb-0 border-4 border-yellow-400">
        <div class="text-center lg:text-left p-4 lg:pl-4 lg:pr-8"> <!-- Adjusted padding-left to lg:pl-4 -->
            <h2 class="text-3xl font-bold text-yellow-400">{{ $user->name }}'s profile</h2>
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


                    <div class = " text-center mb-4 bg-white rounded-lg shadow-md p-8 mb-4">
                        <a href = "/hire">
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none">Hire Now</button>
                            </a>
                </div>
            </div>


            <div class="col-span-2 lg:col-span-1 bg-white rounded-lg shadow-md p-3 mb-4">


                <div class="text-center mb-4">
                    <h2 class="text-2xl font-bold text-black">{{ $user->name }}’s Project <span class="text-yellow-400"></span></h2>
                </div>

                <div class=" justify-center lg:flex-col grid grid-cols-1">
                    <div class="container mx-auto flex flex-col lg:flex-row">
                        <div class="w-full px-2 mb-7">
                            <h3 class="text-xl font-bold text-black">The GREAT WALL OF CHINA</h3>
                            <p class="text-black">The king of spirit</p>
                            <div class="bg-black rounded-lg shadow-md ">
                                <img src="/images/reinhart-julian-WxM465oM4j4-unsplash.png" class="w-full h-48 object-cover rounded-t-lg mb-4">
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <img src="/images/reinhart-julian-WxM465oM4j4-unsplash.png" class=" w-full h-36 object-cover rounded-t-lg mb-4">
                                <img src="/images/reinhart-julian-WxM465oM4j4-unsplash.png" class="w-full h-36 object-cover rounded-t-lg mb-4">
                            </div>
                            <h3 class="text-xl font-bold text-black">Tokyo Muse</h3>
                            <p class="text-black">My muse</p>
                            <div class="bg-black rounded-lg shadow-md ">
                                <img src="/images/reinhart-julian-WxM465oM4j4-unsplash.png" class="w-full h-48 object-cover rounded-t-lg mb-4">
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <img src="/images/reinhart-julian-WxM465oM4j4-unsplash.png" class=" w-full h-36 object-cover rounded-t-lg mb-4">
                                <img src="/images/reinhart-julian-WxM465oM4j4-unsplash.png" class="w-full h-36 object-cover rounded-t-lg mb-4">
                            </div>
                            @foreach ($allservice as $ser)
                            <h3 class="text-xl font-bold text-center text-yellow-400 p-4">{{ $ser->title }}</h3>
                            <p class="text-white font-bold text-center p-2">{{ $ser->description }}</p>
                            <div class="bg-black rounded-lg shadow-md ">
                                <img src="images/{{ $ser->images }}" class="w-full h-48 object-cover rounded-t-lg mb-4">
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
