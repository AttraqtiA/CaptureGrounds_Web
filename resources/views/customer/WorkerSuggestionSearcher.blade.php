@extends('layouts.app')

@section('content_page')
<div class="container mx-auto min-h-screen w-full my-6 pt-20">
    <h1 class="text-4xl font-bold mb-6 text-center">Videographer and Photographer Searcher</h1>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="/search" method="POST">
            @csrf
            <div class="mb-6">
                <label for="searchQuery" class="block text-lg font-medium text-gray-700">Enter your search criteria:</label>
                <textarea id="searchQuery" name="searchQuery" rows="5" class="mt-2 block w-full p-4 border border-gray-300 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-yellow-500" placeholder="Type your search criteria here..."></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Confirm</button>
            </div>
        </form>
    </div>
</div>
@endsection
