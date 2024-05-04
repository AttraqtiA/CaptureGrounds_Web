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

    <section id="offer">

    </section>

    @include('layouts.jumbotron_register')
@endsection
