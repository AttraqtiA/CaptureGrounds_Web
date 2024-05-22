@extends('layouts.app')

@section('content_page')
    <section class="pt-20 w-full bg-neutral-200">
        <div class="bg-black p-10 gap-10 " style="background-image: url('')">

            <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png" alt="Profile Picture"
                class="w-32 h-32 mx-auto rounded-full mb-8 lg:float-left lg:mb-0 border-4 border-yellow-400 gap-3">
            <div class="text-center lg:text-left p-4 lg:pl-4 lg:pr-8 gap-3 ms-4">
                <h2 class="text-3xl font-bold text-yellow-400">Hi {{ $user->name }} ,</h2>
                <div class = "lg:text-right">
                    <p class="text-md text-white ">{{ $user->email }}</p>
                    <p class="text-md text-white">{{ $user->city }},{{ $user->country }}</p>
                </div>
            </div>
        </div>
        </div>
        <div class="p-9 bg-neutral-200">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                <div class="col-span-2 lg:col-span-1 bg-white rounded-lg p-8 mb-4">
                    <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                        <p class="text-3xl font-bold text-yellow-400">Description</p>
                        <p class="text-1xlfont-bold text-black mb-4">{{ $user->description }}</p>
                    </div>

                    <div class="mb-8">
                        <div class = "bg-white rounded-lg shadow-md p-8 mb-4">
                            <h3 class="text-3xl font-bold text-black text-center mb-4">Your <span
                                    class="text-yellow-400">Stats</span></h3>


                            <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                <p class="text-lg font-bold text-yellow-400 text-center">Favorite Photographer</p>
                                @if ($mostServiceOrdersWorker)
                                    <p class="text-lg font-bold text-white text-center">{{ $mostServiceOrdersWorker->name }}
                                    </p>
                                @else
                                    <p class="text-lg font-bold text-white text-center">Nobody is your favorite</p>
                                @endif
                            </div>

                            <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                <p class="text-lg font-bold text-yellow-400 text-center">Currently Project</p>
                                @if ($project)
                                    <p class="text-lg font-bold text-white text-center">{{ $project->title }}</p>
                                @else
                                    <p class="text-lg font-bold text-white text-center">no project</p>
                                @endif
                            </div>

                            <div class="grid grid-cols-2 lg:grid-cols-2 gap-4">
                                <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                    <p class="text-lg font-bold text-yellow-400 text-center">Usage Experience</p>
                                    <p class="text-lg font-bold text-white text-center">{{ $usageDuration }}</p>
                                </div>
                                <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                    <p class="text-lg font-bold text-yellow-400 text-center">Total Projects</p>
                                    <p class="text-lg font-bold text-white text-center">{{ $allprojects }}</p>
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <a href="/projectList">
                                        <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded focus:outline-none">Project List</button>
                                    </a>
                                </div>
                            </div>

                        </div>


                    </div>


                    <div class = "bg-white rounded-lg shadow-md p-8 mb-4 text-center">
                        {{-- <a href = "/projectList">
                            <button
                                class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none">Project List</button>
                        </a> --}}
                        <div class="flex items-center space-x-4">
                            <input type="text" placeholder="Search..." class="flex-grow bg-white px-4 py-2 rounded-lg focus:outline-none">
                            <a href="/search_bar">
                                <button class="text-black bg-blue-200 hover:bg-green-500 hover:text-white font-bold py-2 px-4 rounded focus:outline-none">
                                    Search for Workers
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

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
                                @foreach ($recommended as $rec)
                                    <a href="{{ route('worker_profile', $rec->id) }}">
                                        <div class="bg-black rounded-lg shadow-md pb-5">
                                            <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png"
                                                alt="Trending Picture" class="w-full h-48 object-cover rounded-t-lg mb-4">
                                            <div class="p-4">
                                                <h3 class="text-xl font-bold text-center text-yellow-400">
                                                    {{ $rec->name }}</h3>
                                                <p class="text-white font-bold text-center pb-4">{{ $rec->description }}
                                                </p>
                                            </div>
                                    </a>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
