@extends('layouts.app')

@section('content_page')
    <div class="pt-10 md:pt-20 lg:pt-20 p-5 md:p-10 lg:p-20 mx-auto">
        <h1 class="mb-5 text-2xl md:text-4xl lg:text-5xl font-extrabold leading-none tracking-tight text-gray-900 text-center">
            Your <span class="underline underline-offset-3 decoration-8 decoration-yellow-400">Project</span></h1>
        <div class="flex flex-col md:flex-row md:gap-x-8">
            <img class="rounded-lg w-full md:w-1/2" src="/images/{{ $choseProject->Services->image }}"
                alt="{{ $choseProject->Services->title }}" />
            <div class="flex flex-col md:w-1/2">
                <h3 class="mb-4 text-xl md:text-3xl lg:text-4xl font-bold text-gray-900">{{ $choseProject->Services->title }}</h3>
                <p class="mb-2 text-sm md:text-md lg:text-lg font-medium text-gray-700">{{ $choseProject->Services->description }}</p>
                <h3 class="mb-2 text-sm md:text-md lg:text-lg font-medium text-gray-700">Photo & Video Results</h3>
                <img class="rounded-lg w-full mb-5" src="/images/{{ $urlPhoto }}" alt="{{ $urlPhoto }}" />
                <video class="w-full h-auto max-w-full border border-gray-200 rounded-lg dark:border-gray-700" controls>
                    <source src="/videos/{{ $urlVideo }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
@endsection
