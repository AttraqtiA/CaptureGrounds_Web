@extends('layouts.app')

@section('content_page')
<section class="pt-20 w-full bg-neutral-200">
<div class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold">{{ $post->user->name }}</h2>
                    <p class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</p>
                </div>
                @can('update', $post)
                <div class="flex items-center">
                    <a href="{{ route('edit_Recruitment', $post->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                    <form action="{{ route('Recruitment_destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
                @endcan
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
</section>
@endsection
