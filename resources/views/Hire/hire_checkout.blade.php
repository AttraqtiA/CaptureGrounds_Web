@extends('layouts.app')

@section('content_page')
    <div class="pt-32 pb-16 flex flex-col md:flex-row items-center md:items-start w-full">

        <div class="p-8 md:pl-16 md:pr-0 flex flex-col items-center md:items-start">
            <h1 class="text-center text-2xl font-bold text-neutral-950 mb-4">Let's <mark
                    class="bg-transparent text-yellow-400">Process</mark></h1>

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

        <div class="w-full md:w-1/2 px-8 md:px-16 py-16 mx-auto">
            <p class="text-lg font-semibold">Price: <mark class="">$50</mark></p>
            <p class="text-lg font-semibold">Starting Date: <mark class="">2022-01-01</mark></p>
            <p class="text-lg font-semibold">Ending Date: <mark class="">2022-01-03</mark></p>
            <p class="text-lg font-semibold">Duration: <mark class="">3 days</mark></p>
            <p class="text-lg font-semibold">Base Price: <mark class="">$150</mark></p>

            <button class="mt-4 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded flex gap-2 items-center justify-center space-x-2">
                <span class="text-sm">You can save <mark class="bg-transparent font-bold text-white">$5</mark></span>
                <span class="text-sm">3 promotion used</span>
                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>

            <div class="mt-8">
                <button class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded-lg">
                    Re-Check
                </button>

                <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded-lg">
                    Cancel
                </button>

                <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded-lg">
                    Checkout
                </button>
            </div>

        </div>
    </div>
@endsection
