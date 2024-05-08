@extends('layouts.app')

@section('content_page')
    <div class="pt-36 md:pt-40 lg:pt-40 p-10 md:p-12 lg:p-20 mx-auto">
        <h1
            class="mb-10 text-2xl md:text-4xl lg:text-5xl font-extrabold leading-none tracking-tight text-gray-900 text-center">
            Your <span class="underline underline-offset-3 decoration-8 decoration-yellow-400">Project</span></h1>
        <div class="flex flex-col flex-col md:flex-row md:gap-x-6">
            <div class="flex flex-col h-full w-3/6 ">
                <img class="rounded-lg object-cover mb-6" src="/images/{{ $choseProject->Services->image }}"
                    alt="{{ $choseProject->Services->title }}" />
                <div class="flex flex-row justify-between items-center">
                    <h3 class="mb-3 text-lg md:text-2xl lg:text-3xl font-bold text-gray-900">Add to Review</h3>
                    <button type="button" data-modal-target="add_testimony_modal" data-modal-toggle="add_testimony_modal"
                        class="inline-flex cursor-pointer text-white bg-yellow-500 hover:bg-yellow-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center">
                        <svg class="w-4 h-4 mr-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                        </svg>Add Review
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="add_testimony_modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    @csrf
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative rounded-lg shadow bg-white">
                            <button type="button"
                                class="cursor-pointer absolute top-3 end-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                data-modal-hide="add_testimony_modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <span class="mb-1 block text-lg font-bold text-gray-900">Ulas </span>
                                <div class="flex flex-col justify-center items-center w-full">
                                    <label for="review"
                                        class="mb-2 block text-sm font-semibold text-gray-900">Review</label>
                                    <textarea id="review" name="review" rows="4"
                                        class="{{ $errors->has('review') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-yellow-500 text-gray-900 placeholder-gray-400  focus:ring-yellow-500 focus:border-yellow-500' }} text-center rounded-lg border-1 text-sm block w-full p-2.5"
                                        placeholder="Berikan ulasan anda terhadap produk ini">{{ old('review') }}</textarea>
                                    <label for="rating"
                                        class="mt-4 mb-2 block text-sm font-semibold text-gray-900">Rating</label>
                                    <input type="number" id="rating" name="rating"
                                        aria-describedby="helper-text-explanation"
                                        class="{{ $errors->has('review') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-yellow-500 text-gray-900 placeholder-gray-400  focus:ring-yellow-500 focus:border-yellow-500' }} text-center rounded-lg border-1 text-sm block w-full p-2.5"
                                        placeholder="Beri rating dari 1 - 5" min="1" max="5"
                                        value="{{ old('rating') }}">
                                    <span class="mt-4 mb-2 block text-sm font-semibold text-gray-900">Upload
                                        Foto
                                        Ulasan
                                        (Opsional)</span>
                                    <div id="existingImagePreviewId" class="mb-3"></div>
                                    <label for="image"
                                        class="flex flex-col justify-center items-center w-full h-44 bg-gray-50 rounded-lg border-1 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100">
                                        <input type="file" name="image" id="image" class="hidden"
                                            onchange="displayImagePreview_UlasProduk(this)">
                                        <div class="flex flex-col justify-center items-center w-full pt-5 pb-6">
                                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500">
                                                <span class="font-semibold">Klik untuk upload</span>
                                            </p>
                                            <p class="text-xs text-gray-500">PNG, JPG atau JPEG (Ukuran File
                                                MAX.
                                                5MB)
                                            </p>
                                        </div>
                                    </label>
                                </div>
                                <button type="submit" onclick="return confirm('Apakah anda yakin dengan ulasan ini?')"
                                    class="cursor-pointer mt-3 w-full text-white bg-yellow-500 hover:bg-yellow-600 font-medium rounded-lg text-base px-5 py-2.5 text-center items-center">
                                    Tambahkan Ulasan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr class="h-px bg-gray-700 border-0">

            </div>
            <div class="flex flex-col w-3/6">
                <h3 class="mb-2 text-lg md:text-2xl lg:text-3xl font-bold text-gray-900">
                    {{ $choseProject->Services->title }}
                </h3>
                <p class="mb-8 text-sm md:text-md lg:text-lg font-medium text-gray-700">
                    {{ $choseProject->Services->description }}</p>
                <div class="bg-gray-950 shadow p-6 rounded-lg">
                    <h3 class="mb-4 text-sm md:text-md lg:text-xl font-bold text-yellow-400">Photo & Video Results</h3>
                    @if ($urlPhoto)
                        <img class="rounded-lg w-full mb-4 shadow-md" src="/images/{{ $urlPhoto }}"
                            alt="{{ $urlPhoto }}" />
                    @endif
                    @if ($urlVideo)
                        <video class="w-full h-auto max-w-full rounded-lg shadow-md" controls>
                            <source src="/videos/{{ $urlVideo }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
