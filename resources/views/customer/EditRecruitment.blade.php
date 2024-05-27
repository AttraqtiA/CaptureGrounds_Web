@extends('layouts.app')

@section('content_page')
<div class="bg-black min-h-screen py-10">
    <div class="container mx-auto mt-5 bg-white p-8 rounded-lg shadow-lg">
        <form action="{{ route('Recruitment_update', $Recruitment) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" id="title" name="title" placeholder="Write the title of the recruitment" value="{{ $Recruitment->title }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="minimumPrice" class="block text-gray-700 text-sm font-bold mb-2">Minimum Price</label>
                <input type="number" id="minimumPrice" name="minimumPrice" placeholder="Minimum price of the recruitment" value="{{ $Recruitment->minimumPrice }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="maximumPrice" class="block text-gray-700 text-sm font-bold mb-2">Maximum Price</label>
                <input type="number" id="maximumPrice" name="maximumPrice" placeholder="Maximum price of the recruitment" value="{{ $Recruitment->maximumPrice }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea id="description" name="description" placeholder="Write the description of the recruitment"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $Recruitment->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location</label>
                <input type="text" id="location" name="location" placeholder="Location of the recruitment" value="{{ $Recruitment->location }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="field_id" class="block text-gray-700 text-sm font-bold mb-2">Field</label>
                <select id="field_id" name="field_id"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Select a Field</option>
                    @foreach($fields as $field)
                        <option value="{{ $field->id }}" {{ $Recruitment->field_id == $field->id ? 'selected' : '' }}>{{ $field->field_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Image</label>
                <div x-data="{ imagePreview: '{{ asset('storage/' . $Recruitment->image) }}' }">
                    <img x-bind:src="imagePreview" alt="Image Preview" class="img-preview img-fluid mb-3 w-full max-w-xs mx-auto">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" id="image" name="image" accept="image/jpg, image/png, image/jpeg" x-on:change="previewImage()">
                </div>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-yellow-600">
                Update Recruitment
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFEvent) {
                imgPreview.src = oFEvent.target.result;
            }
        }
    </script>
</div>
<br>
@endsection
