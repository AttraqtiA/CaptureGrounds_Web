@extends('layouts.app')

@section('content_page')
    <section class="pt-24 w-full h-screen bg-neutral-950">
        <div class="py-64 pl-8 md:pl-16 lg:pl-24">
            <h1 class="text-white font-extrabold text-2xl md:text-3xl lg:text-5xl mb-4">Capture <mark
                    class="bg-transparent text-yellow-400">TheMoment</mark></h1>
            <h2 class="text-white font-thin text-xl md:text-2xl lg:text-3xl">Connect With Top <br><mark
                    class="bg-transparent text-yellow-400">Videographers & Photographers</mark></h2>
            <a class="relative group"
                href="https://www.figma.com/file/pw7eT86kzEmSIkfGUe91iz/Capture-Grounds?type=design&node-id=67%3A2&mode=design&t=PzOQ9YTSoleiprEO-1"
                target="_blank">
                <button class="relative mt-8 bg-yellow-400 text-white text-lg font-semibold px-3 py-2 rounded-lg z-10">CLICK
                    to Check Our Mockup</button>
                <span class="absolute top-4 right-1 z-10 flex h-3 w-3 -mt-8 -mr-2 group-hover:flex">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </span>

            </a>
        </div>
        <img src="/images/landing_2.png" class="absolute bottom-0 right-0">
    </section>

    <section id="offer" class="bg-white py-24">
        <div class="container mx-auto px-4 md:px-0 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What</h1>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">Do <span class="text-yellow-400">We Offer ?</span></h1>

            <div class="flex flex-col md:flex-row justify-center md:space-x-12 lg:space-x-24">

                <div class="rounded-md bg-black p-6 mb-8 md:mb-0">
                    <img src="images\Profile (1).png" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-white font-bold text-lg mb-2">Portfolio Showcase</h3>
                    <p class="text-white">Photographers and</p>
                    <p class="text-white">videographers can display</p>
                    <p class="text-white">their portfolios, allowing</p>
                    <p class="text-white">customers to view their</p>
                    <p class="text-white">previous work.</p>
                </div>
                <div class="rounded-md bg-black p-6 mb-8 md:mb-0">
                    <img src="images\Vector.png" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-white font-bold text-lg">Comprehensive</h3>
                    <h3 class="text-white font-bold text-lg">Search Filters</h3>
                    <p class="text-white">Customers can easily search</p>
                    <p class="text-white">for service providers that</p>
                    <p class="text-white">meet their needs based on</p>
                    <p class="text-white">location, style, and budget.</p>
                </div>

                <div class="rounded-md bg-black p-6 mb-8 md:mb-0">
                    <img src="images\Group.png" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-white font-bold text-lg">Secure Booking</h3>
                    <h3 class="text-white font-bold text-lg">System</h3>
                    <p class="text-white">A secure booking system</p>
                    <p class="text-white">makes it easy for customers</p>
                    <p class="text-white">to confidently book</p>
                    <p class="text-white">photographers or</p>
                    <p class="text-white">videographers, ensuring</p>
                    <p class="text-white">smooth and secure </p>
                    <p class="text-white">transactions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="Join_now" class="bg-black bg-opacity-75 py-24">
        <div class="container mx-auto text-center">
            <h1 class="text-white font-bold text-5xl md:text-6xl lg:text-7xl mb-8">Benefit</h1>
            <p class="text-white font-normal text-lg md:text-xl">Unlock new opportunities to grow your business! With our comprehensive search filters</p>
            <p class="text-white font-normal text-lg md:text-xl">and secure booking system, finding customers has never been easier.</p>
            <p class="text-white font-normal text-lg md:text-xl mb-8"> Expand your portfolio!</p>
            <a href="https://www.figma.com/file/pw7eT86kzEmSIkfGUe91iz/Capture-Grounds?type=design&node-id=67%3A2&mode=design&t=PzOQ9YTSoleiprEO-1" class="bg-yellow-400 text-black font-bold text-lg py-3 px-8 rounded-lg inline-block">Join Now</a>
        </div>
    </section>

    @include('layouts.jumbotron_register')
@endsection
