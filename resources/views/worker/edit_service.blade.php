@extends('layouts.app')

@section('content_page')
<div class="bg-black min-h-screen py-10">
    <div class="container mx-auto mt-5 bg-white p-8 rounded-lg shadow-lg">
        <form action="{{ route('service_update', $service) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">title</label>
                <input type="text" id="title" name="title" placeholder="Write the title of the service"  value="{{ $service->title }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">price</label>
                <input type="number" id="price" name="price" placeholder="write the price of the service" value="{{ $service->price }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">description</label>
                <input type="text" id="description" name="description" placeholder="write the description of the service" value="{{ $service->description }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-gray-700 text-sm font-bold mb-2">Upload Image</label>
                <div x-data="{ imagePreview: '' }">
                    <img x-bind:src="imagePreview" alt="Image Preview" class="img-preview img-fluid mb-3 w-full max-w-xs mx-auto">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" id="image" name="image" accept="image/jpg, image/png, image/jpeg" x-on:change="previewImage()" required>
                </div>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-yellow-600">
                Make service
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <script>
        function previewImage() {
            const image = document.querySelector('#photo');
            const imgPreview = document.querySelector('.img-preview');
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);
            ofReader.onload = function(oFRevent) {
                imgPreview.src = oFRevent.target.result;
            }
        }
    </script>
</div>
<br>
@endsection
