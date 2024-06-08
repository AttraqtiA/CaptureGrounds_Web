@extends('layouts.app')

@section('content_page')
    <section class="pt-24 w-full h-screen bg-neutral-950">
        <div class="py-64 pl-8 md:pl-16 lg:pl-24">
            <h1 class="text-white font-extrabold text-2xl md:text-3xl lg:text-5xl mb-4">Capture <mark
                    class="bg-transparent text-yellow-400">TheMoment</mark></h1>
            <h2 class="text-white font-thin text-xl md:text-2xl lg:text-3xl">Connect With Top <br><mark
                    class="bg-transparent text-yellow-400">Videographers & Photographers</mark></h2>

            <div class="w-full md:w-1/3 pt-8">
                <form class="flex items-center" action="/" method="GET">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center px-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                            </svg>
                        </div>
                        <input type="search" name="search" id="simple-search" placeholder="Sweet Seventeen event" required=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2">
                    </div>

                    <button type="submit" class="bg-yellow-400 ml-2 p-2 rounded-lg text-sm">
                        <p class="font-semibold text-white px-2">Search</p>
                    </button>
                </form>
            </div>

        </div>
        <img src="/images/landing_2.png" class="absolute bottom-0 right-0">
    </section>

    <section id="offer" class="bg-white py-24">
        <div class="container mx-auto px-4 md:px-0 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-16">What do we<br><span class="text-yellow-400">Offer
                    ?</span></h1>

            <div class="px-8 flex flex-col md:flex-row justify-around md:space-x-12 lg:space-x-24">

                <div class="w-full md:w-1/4 rounded-lg bg-black p-6 mb-8 md:mb-0">
                    <img src="images\Profile (1).png" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-white font-bold text-lg">Portfolio Showcase</h3>
                    <p class="text-white">Photographers and ideographers can display their portfolios, allowing customers to
                        view their previous work.</p>
                </div>
                <div class="w-full md:w-1/4 rounded-lg bg-black p-6 mb-8 md:mb-0">
                    <img src="images\Vector.png" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-white font-bold text-lg">Comprehensive Search Filters</h3>
                    <p class="text-white">Customers can easily search for service providers that meet their needs based on
                        location, style, and budget.</p>
                </div>

                <div class="w-full md:w-1/4 rounded-lg bg-black p-6 mb-8 md:mb-0">
                    <img src="images\Group.png" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-white font-bold text-lg">Secure Booking System</h3>
                    <p class="text-white">A secure booking system makes it easy for customers to confidently book
                        photographers or videographers, ensuring smooth and secure transactions.</p>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('/images/reinhart-julian-WxM465oM4j4-unsplash.png')"
        class="bg-cover bg-center bg-no-repeat bg-neutral-500 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center text-white py-16 lg:py-32">
            <h2 class="text-center text-yellow-400 mb-20 text-4xl font-medium">Tons of Benefit!<br><mark
                    class="px-2 text-white bg-transparent rounded">Unlock new opportunities to grow your business! With our
                    comprehensive search filters!</mark></h2>

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
