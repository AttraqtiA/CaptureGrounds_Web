@extends('layouts.app')

@section('content_page')
    <form action="{{ route('hireCheckout') }}">
        {{-- method="POST" enctype="multipart/form-data" --}}
        @csrf
        <div class="pt-32 pb-16 flex flex-col md:flex-row items-center md:items-start w-full">

            <div class="p-8 md:pl-16 md:pr-0 flex flex-col items-center md:items-start">
                <h1 class="text-center text-2xl font-bold text-neutral-950 mb-4">Let's add details to<mark
                        class="bg-transparent text-yellow-400"> Sylvia's </mark></h1>

                <div
                    class="flex flex-col items-center bg-neutral-950 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/images/hire_1.png" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-yellow-400">Professional
                            Event Photography</h5>
                        <p class="mb-3 font-normal text-neutral-400">Trustworthy! Great picts would never
                            disappoint! Your best pal for every event.</p>
                        <span class="text-xl font-bold text-white">$50 /day</span>
                    </div>
                </div>
            </div>


            <div class="w-full md:w-1/2 px-8 md:px-16 mx-auto">
                <div class="mb-4">
                    <label for="startingDate" class="block text-sm font-semibold text-gray-700">Starting Date</label>
                    <div class="relative mt-1 block w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-8 4h8m-8 4h8m-8 4h8m-8 4h8" />
                            </svg>
                        </div>
                        <input datepicker type="text" id="startingDate" name="startingDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Select date">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="endingDate" class="block text-sm font-semibold text-gray-700">Ending Date</label>
                    <div class="relative mt-1 block w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-8 4h8m-8 4h8m-8 4h8m-8 4h8" />
                            </svg>
                        </div>
                        <input datepicker type="text" id="endingDate" name="endingDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Select date">
                    </div>
                </div>
                <button type="submit"
                    class="mt-8 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-yellow-400 bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                    Continue
                </button>
                <a href="{{ route('hireOption') }}" class="text-center text-neutral-400 block mt-2">Missclicked? <mark
                        class="bg-transparent text-yellow-400 hover:underline">Cancel!</mark></a>
            </div>

        </div>
    </form>
@endsection
