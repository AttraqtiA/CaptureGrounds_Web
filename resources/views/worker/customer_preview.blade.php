@extends('layouts.app')

@section('content_page')
    <section class="pt-20 w-full min-h-screen bg-neutral-200">
        <div class="p-9 bg-neutral-200">
            <div class="min-w-screen">
                <div class="bg-black p-10 flex flex-col lg:flex-row items-center gap-10" style="background-image: url('')">
                    <img src="images/reinhart-julian-WxM465oM4j4-unsplash.png" alt="Profile Picture" class="w-32 h-32 rounded-full border-4 border-yellow-400">
                    <div class="flex flex-col lg:flex-row items-center lg:items-start lg:ml-8">
                        <div class="text-center lg:text-left">
                            <h2 class="text-3xl font-bold text-yellow-400">Hi John Doe,</h2>
                            <p class="text-md text-white">john.doe@example.com</p>
                            <p class="text-md text-white">New York, USA</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 lg:col-span-1 bg-white rounded-lg p-8 mb-4">
                    <div class="bg-white rounded-lg shadow-md p-8 mb-4">
                        <p class="text-3xl font-bold text-yellow-400">Description</p>
                        <p class="text-1xl font-bold text-black mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Donec vehicula cursus vestibulum.</p>
                    </div>

                    <div class="mb-8">
                        <div class="bg-white rounded-lg shadow-md p-8 mb-4">
                            <h3 class="text-3xl font-bold text-black text-center mb-4">Your <span
                                    class="text-yellow-400">Stats</span></h3>

                            <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                <p class="text-lg font-bold text-yellow-400 text-center">Favorite Photographer</p>
                                <p class="text-lg font-bold text-white text-center">*CLASSIFIED*</p>
                            </div>

                            <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                <p class="text-lg font-bold text-yellow-400 text-center">Current Project</p>
                                <p class="text-lg font-bold text-white text-center">Website Redesign</p>
                            </div>

                            <div class="grid grid-cols-2 lg:grid-cols-2 gap-4">
                                <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                    <p class="text-lg font-bold text-yellow-400 text-center">Usage Experience</p>
                                    <p class="text-lg font-bold text-white text-center">2 years</p>
                                </div>
                                <div class="bg-black rounded-lg shadow-md p-4 mb-4">
                                    <p class="text-lg font-bold text-yellow-400 text-center">Total Projects</p>
                                    <p class="text-lg font-bold text-white text-center">15</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-8 mb-4 text-center">
                        <a href="/projectList">
                            <button
                                class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none">Project
                                List</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
