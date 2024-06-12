@extends('layouts.app')

@section('content_page')
<div class="container mx-auto pt-24 px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold">{{ $post->user->name }}</h2>
                    <p class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</p>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('edit_post', $post) }}">
                        <button class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600" id="edit" name="edit">Edit</button>
                    </a>
                    <form action="{{ route('destroy_post', $post) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 mt-2 md:mt-0" id="delete" name="delete">Delete</button>
                    </form>
                </div>

            </div>
            <h3 class="text-xl font-semibold mt-4">{{ $post->title }}</h3>
            <p class="mt-2">{{ $post->description }}</p>
            <p class="mt-2"><strong>Location:</strong> {{ $post->location }}</p>
            <p class="mt-2"><strong>Price Range:</strong> ${{ $post->minimumPrice }} - ${{ $post->maximumPrice }}</p>
            <p class="mt-2"><strong>Field:</strong> {{ $post->field->field_name }}</p>
            @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="mt-4 rounded-lg">
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection
