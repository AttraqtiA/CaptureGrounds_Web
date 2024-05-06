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
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-16">What do we<br><span class="text-yellow-400">Offer ?</span></h1>

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

    <section style="background-image: url('/images/reinhart-julian-WxM465oM4j4-unsplash.png')"
    class="bg-cover bg-center bg-no-repeat bg-neutral-500 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center text-white py-16 lg:py-32">
        <h2 class="text-center text-yellow-400 mb-20 text-4xl font-medium">Tons of Benefit!<br><mark
                class="px-2 text-white bg-transparent rounded">Unlock new opportunities to grow your business! With our comprehensive search filters!</mark></h2>

        @guest
            <a href="{{ route('register') }}"
                class="inline-flex justify-center items-center py-4 px-7 text-lg font-bold text-center text-neutral-950 rounded-xl bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:ring-yellow-300">
                Join Now
            </a>
        @endguest


    </div>
</section>


    @include('layouts.jumbotron_register')
@endsection
