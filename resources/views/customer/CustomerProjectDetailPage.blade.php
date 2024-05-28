@extends('layouts.app')

@section('content_page')
    <div class="pt-36 md:pt-40 lg:pt-40 p-10 md:p-12 lg:p-20 mx-auto">
        <div class="flex flex-col items-center">
            @if (session('addReview_success'))
                <div class="w-8/12 sm:w-5/12 md:w-4/12 lg:w-3/12 flex justify-center items-center p-4 mb-4 text-sm rounded-lg bg-gray-900 text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session('addReview_success') }}
                    </div>
                </div>
            @endif
            @if (session('updateReview_success'))
                <div class="w-8/12 sm:w-5/12 md:w-4/12 lg:w-3/12 flex justify-center items-center p-4 mb-4 text-sm rounded-lg bg-gray-900 text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session('updateReview_success') }}
                    </div>
                </div>
            @endif
            @if (session('deleteReview_success'))
                <div class="w-10/12 sm:w-7/12 md:w-6/12 lg:w-4/12 flex justify-center items-center p-4 mb-4 text-sm rounded-lg bg-gray-900 text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{!! session('deleteReview_success') !!}
                    </div>
                </div>
            @endif
            @error('review')
                <div class="w-8/12 sm:w-5/12 md:w-4/12 lg:w-3/12 flex justify-center items-center p-4 mb-4 text-sm rounded-lg bg-gray-900 text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ $message }}
                    </div>
                </div>
            @enderror
            @error('rating')
                <div class="w-8/12 sm:w-5/12 md:w-4/12 lg:w-3/12 flex justify-center items-center p-4 mb-4 text-sm rounded-lg bg-gray-900 text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ $message }}
                    </div>
                </div>
            @enderror
            @error('image')
                <div class="w-8/12 sm:w-5/12 md:w-4/12 lg:w-3/12 flex justify-center items-center p-4 mb-4 text-sm rounded-lg bg-gray-900 text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ $message }}
                    </div>
                </div>
            @enderror
        </div>
        <h1
            class="mb-10 text-2xl md:text-4xl lg:text-5xl font-extrabold leading-none tracking-tight text-gray-900 text-center">
            Your <span class="underline underline-offset-3 decoration-8 decoration-yellow-400">Project</span></h1>
        <div class="flex flex-col gap-y-10 md:gap-y-10 mx-auto">
            <div class="grid grid-rows-2 grid-cols-1 md:grid-cols-2 md:grid-rows-1 gap-y-6 md:gap-x-6 md:gap-y-0">
                <div class="bg-gray-950 shadow p-6 rounded-lg w-full">
                    <h3 class="mb-2 text-lg md:text-2xl lg:text-3xl font-bold text-yellow-400">
                        {{ $project->title }}
                    </h3>
                    <p class="mb-6 text-sm md:text-base lg:text-base font-medium text-white text-justify">
                        {{ $project->description }}</p>
                    <p class="mb-4 text-sm md:text-md lg:text-base font-medium text-white text-justify">
                        Starting date : <span class="font-bold">{{ $project->date }}</span></p>
                    <p class="mb-4 text-sm md:text-md lg:text-base font-medium text-white text-justify">
                        Work duration : <span class="font-bold">{{ $project->workDuration }}</span></p>
                    <p class="mb-4 text-sm md:text-md lg:text-base font-medium text-white text-justify">
                        Location : <span class="font-bold">{{ $project->location }}</span></p>
                    <p class="text-sm md:text-md lg:text-base font-medium text-white text-justify">
                        Total payment : <span class="font-bold">{{ $choseProject->totalPayment }}</span></p>
                </div>
                <div class="bg-gray-950 shadow p-6 rounded-lg w-full">
                    <h3 class="mb-4 text-sm md:text-md lg:text-xl font-bold text-yellow-400">Photo & Video
                        Results</h3>
                    @if ($choseProject->finishedStatus == 'yes')
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
                    @elseif ($choseProject->finishedStatus == 'yes')
                        <h3 class="text-sm md:text-md lg:text-base font-medium text-white">Your project hasn't been
                            done yet.</h3>
                    @endif
                </div>
            </div>
            <div class="grid grid-rows-2 grid-cols-1 md:grid-cols-2 md:grid-rows-1 gap-y-6 md:gap-x-6 md:gap-y-0">
                <div class="flex flex-col w-full">
                    <div class="flex flex-row justify-between items-center mb-2">
                        <h3 class="text-lg md:text-2xl lg:text-xl font-semibold text-gray-900">Reviews</h3>
                        @if ($choseProject->finishedStatus == 'yes')
                            @if (!$check_reviews)
                                <button type="button" data-modal-target="add_review_modal"
                                    data-modal-toggle="add_review_modal"
                                    class="inline-flex cursor-pointer text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center">
                                    <svg class="w-4 h-4 mr-2 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                                    </svg>Add Review
                                </button>
                                <form action="{{ route('review.store', $choseProject->id) }}" method="POST"
                                    enctype="multipart/form-data" id="add_review_modal" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    @csrf
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative rounded-lg shadow bg-white">
                                            <button type="button"
                                                class="cursor-pointer absolute top-3 end-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                                data-modal-hide="add_review_modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <span
                                                    class="block text-base font-bold text-gray-900">{{ $choseProject->Services->name }}</span>
                                                <span
                                                    class="mb-4 block text-base font-normal text-gray-900">{{ $choseProject->Services->Users->name }}</span>
                                                <div class="flex flex-col justify-center items-center w-full">
                                                    <label for="review"
                                                        class="mb-2 block text-sm font-semibold text-gray-900">Review</label>
                                                    <textarea id="review" name="review" rows="4"
                                                        class="{{ $errors->has('review') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-yellow-500 text-gray-900 placeholder-gray-400  focus:ring-yellow-500 focus:border-yellow-500' }} text-center rounded-lg border-1 text-sm block w-full p-2.5"
                                                        placeholder="Give your review about this service">{{ old('review') }}</textarea>
                                                    <label for="rating"
                                                        class="mt-4 mb-2 block text-sm font-semibold text-gray-900">Rating</label>
                                                    <input type="number" id="rating" name="rating"
                                                        aria-describedby="helper-text-explanation"
                                                        class="{{ $errors->has('review') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-yellow-500 text-gray-900 placeholder-gray-400  focus:ring-yellow-500 focus:border-yellow-500' }} text-center rounded-lg border-1 text-sm block w-full p-2.5"
                                                        placeholder="Beri rating dari 1 - 5" min="1"
                                                        max="5" value="{{ old('rating') }}">
                                                    <span
                                                        class="mt-4 mb-2 block text-sm font-semibold text-gray-900">Upload
                                                        Review
                                                        Image (Optional)</span>
                                                    <div id="existingImagePreviewId" class="mb-3"></div>
                                                    <label for="image"
                                                        class="flex flex-col justify-center items-center w-full h-44 bg-gray-50 rounded-lg border-1 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100">
                                                        <input type="file" name="image" id="image"
                                                            class="hidden" onchange="displayImagePreview_AddReview(this)">
                                                        <div
                                                            class="flex flex-col justify-center items-center w-full pt-5 pb-6">
                                                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400"
                                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                            </svg>
                                                            <p class="mb-2 text-sm text-gray-500">
                                                                <span class="font-semibold">Click to upload</span>
                                                            </p>
                                                            <p class="text-xs text-gray-500">PNG, JPG or JPEG (Max. 5MB)
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure about this review?')"
                                                    class="cursor-pointer mt-3 w-full text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-base px-5 py-2.5 text-center items-center">
                                                    Add Review
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <button type="button" data-modal-target="update_review_modal"
                                    data-modal-toggle="update_review_modal"
                                    class="inline-flex cursor-pointer text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm px-3 py-2.5 text-center items-center">
                                    <svg class="w-4 h-4 mr-2 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                                    </svg>Update Review
                                </button>
                                <form action="{{ route('review.update', $choseProject->id) }}" method="POST"
                                    enctype="multipart/form-data" id="update_review_modal" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    @method('patch')
                                    @csrf
                                    <input type="hidden" name="oldImage" value="{{ $check_reviews->image }}">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative rounded-lg shadow bg-white">
                                            <button type="button"
                                                class="cursor-pointer absolute top-3 end-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                                data-modal-hide="update_review_modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <span
                                                    class="block text-base font-bold text-gray-900">{{ $choseProject->Services->title }}</span>
                                                <span class="mb-4 block text-base font-normal text-gray-900">by
                                                    {{ $choseProject->Services->Users->name }}</span>
                                                <div class="flex flex-col justify-center items-center w-full">
                                                    <label for="review"
                                                        class="mb-2 block text-sm font-semibold text-gray-900">Review</label>
                                                    <textarea id="review" name="review" rows="4"
                                                        class="{{ $errors->has('review') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-yellow-500 text-gray-900 placeholder-gray-400  focus:ring-yellow-500 focus:border-yellow-500' }} text-center rounded-lg border-1 text-sm block w-full p-2.5"
                                                        placeholder="Give your review about this service">{{ old('review', $check_reviews->review) }}</textarea>
                                                    <label for="rating"
                                                        class="mt-4 mb-2 block text-sm font-semibold text-gray-900">Rating</label>
                                                    <input type="number" id="rating" name="rating"
                                                        aria-describedby="helper-text-explanation"
                                                        class="{{ $errors->has('review') ? 'bg-red-100 border-red-400 text-red-500 placeholder-red-700' : 'bg-white border-yellow-500 text-gray-900 placeholder-gray-400  focus:ring-yellow-500 focus:border-yellow-500' }} text-center rounded-lg border-1 text-sm block w-full p-2.5"
                                                        placeholder="Beri rating dari 1 - 5" min="1"
                                                        max="5"
                                                        value="{{ old('rating', $check_reviews->rating) }}">
                                                    <span class="mt-4 mb-2 block text-sm font-semibold text-gray-900">Uplod
                                                        Review
                                                        Image (Optional)</span>
                                                    <div id="existingImagePreviewId" class="mb-3">
                                                        @if ($check_reviews->image)
                                                            <img src="/images/{{ $check_reviews->image }}"
                                                                class="w-6/12 mx-auto rounded-lg object-cover" />
                                                        @endif
                                                    </div>
                                                    <label for="image"
                                                        class="flex flex-col justify-center items-center w-full h-44 bg-gray-50 rounded-lg border-1 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100">
                                                        <input type="file" name="image" id="image"
                                                            class="hidden"
                                                            onchange="displayImagePreview_UpdateReview(this, '{{ $check_reviews->image }}', 'existingImagePreviewId')">
                                                        <div
                                                            class="flex flex-col justify-center items-center w-full pt-5 pb-6">
                                                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400"
                                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                            </svg>
                                                            <p class="mb-2 text-sm text-gray-500">
                                                                <span class="font-semibold">Click to upload</span>
                                                            </p>
                                                            <p class="text-xs text-gray-500">PNG, JPG or JPEG (Max. 5MB)
                                                            </p>
                                                        </div>
                                                    </label>
                                                </div>
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure about this review?')"
                                                    class="cursor-pointer mt-3 w-full text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-base px-5 py-2.5 text-center items-center">
                                                    Update Review
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        @endif
                    </div>
                    <hr class="h-px bg-gray-700 border-0">
                    <div
                        class="flex flex-col-reverse @if (count($reviews) == 0) h-full justify-center items-center @endif">
                        @if (count($reviews) > 0)
                            @foreach ($reviews as $review)
                                <div class="flex flex-row gap-x-3 mt-3 w-full">
                                    <div class="flex-none">
                                        @if ($users->profilePicture == null)
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-12 h-12 rounded-full text-gray-900">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        @else
                                            <img class="w-12 h-12  object-cover rounded-full overflow-hidden"
                                                src="/images/{{ $review->ServiceOrders->Users->profilePicture }}"
                                                alt="{{ $review->ServiceOrders->Users->profilePicture }}">
                                        @endif
                                    </div>
                                    <div class="flex flex-col mt-1 w-full">
                                        <div class="flex flex-row justify-between items-center">
                                            <h4 class="text-base font-semibold text-gray-900">
                                                {{ $review->ServiceOrders->Users->name }}
                                            </h4>
                                            @if ($review->ServiceOrders->user_id == 3)
                                                <form action="{{ route('review.destroy', $review->id) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                        class="cursor-pointer text-sm font-medium text-yellow-400 hover:text-yellow-500"
                                                        onclick="return confirm('Are you sure want to delete this review?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            @else
                                            @endif
                                        </div>
                                        <p class="text-sm font-normal text-gray-400">
                                            {{ date('d F Y', strtotime($review->date)) }}</p>
                                        @php
                                            $count_star = 0;
                                        @endphp
                                        <div class="flex flex-row mt-3">
                                            @for ($i = 1; $i <= $review->rating; $i++)
                                                <svg class="w-5 h-5 text-yellow-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                @php
                                                    $count_star += 1;
                                                @endphp
                                            @endfor
                                            @if ($count_star < 5)
                                                @php
                                                    $differenceStar = 5 - $count_star;
                                                @endphp
                                                @for ($i = 1; $i <= $differenceStar; $i++)
                                                    <svg class="w-5 h-5 text-yellow-400" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 21 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m11.479 1.712 2.367 4.8a.532.532 0 0 0 .4.292l5.294.769a.534.534 0 0 1 .3.91l-3.83 3.735a.534.534 0 0 0-.154.473l.9 5.272a.535.535 0 0 1-.775.563l-4.734-2.49a.536.536 0 0 0-.5 0l-4.73 2.487a.534.534 0 0 1-.775-.563l.9-5.272a.534.534 0 0 0-.154-.473L2.158 8.48a.534.534 0 0 1 .3-.911l5.294-.77a.532.532 0 0 0 .4-.292l2.367-4.8a.534.534 0 0 1 .96.004Z" />
                                                    </svg>
                                                @endfor
                                            @endif
                                        </div>
                                        <p class="mt-2 text-sm font-normal text-gray-900">{{ $review->review }}
                                        </p>
                                        @if ($review->image)
                                            <img class="mt-3 w-2/6 object-center object-cover rounded-lg"
                                                src="/images/{{ $review->image }}" alt="{{ $review->image }}">
                                        @else
                                        @endif
                                        @if ($loop->first)
                                        @else
                                            <hr class="h-px mt-6 border-0 bg-gray-400">
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="mt-4 col-span-2 flex flex-col items-center justify-center">
                                <h1 class="text-center text-lg font-bold text-gray-400">Sorry, there's no review yet.</h1>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-row justify-center items-center mt-6">
                        {{ $reviews->links() }}
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <div class="flex flex-row justify-between items-center mb-2">
                        <h1 class="text-lg md:text-2xl lg:text-xl font-semibold text-gray-900">Other Services</h1>
                        <a href="">
                            <p class="text-sm md:text-md lg:text-base font-medium text-yellow-400">See all</p>
                        </a>
                    </div>
                    <hr class="h-px bg-gray-700 border-0">
                    <div
                        class = "grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-3 md:p-4 mt-3 mx-auto @if (count($services) == 0) w-full h-full justify-center items-center @endif">
                        @if (count($services) > 0)
                            @foreach ($services as $service)
                                <div
                                    class="relative hover:shadow-xl transform transition duration-500 hover:-translate-y-4 hover:z-40">
                                    <a href="">
                                        <div class="relative w-4/5 md:w-full h-full rounded-lg bg-gray-950 mx-auto shadow">
                                            <img class="h-52 w-full rounded-t-lg object-center object-cover"
                                                src="/images/{{ $service->image }}" alt="{{ $service->title }}" />
                                            <div class="px-6 py-6 flex flex-col justify-center items-center">
                                                <h5
                                                    class="sm:leading-6 md:leading-normal lg:leading-normal text-xl font-bold tracking-tight text-yellow-400 text-center mb-2">
                                                    {{ $service->title }}
                                                </h5>
                                                <div class="flex flex-row w-full justify-center items-center">
                                                    <p
                                                        class="text-base sm:text-sm md:text-base lg:text-base font-normal text-white text-center">
                                                        Rp.
                                                        {{ number_format($service->price, 0, ',', '.') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function displayImagePreview_AddReview(this) {
            var preview = $('#existingImagePreviewId');

            // Remove existing image
            preview.empty();

            // Display newly uploaded image
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $('<img>').attr('src', e.target.result).addClass(
                        'w-6/12 mx-auto rounded-lg object-cover');
                    preview.append(img);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function displayImagePreview_UpdateReview(input, existingImageUrl, existingImagePreviewId) {
            var preview = $('#' + existingImagePreviewId);

            // Remove existing image
            preview.empty();

            // Display newly uploaded image
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $('<img>').attr('src', e.target.result).addClass(
                        'w-6/12 mx-auto rounded-lg object-cover');
                    preview.append(img);
                };
                reader.readAsDataURL(input.files[0]);
            } else if (existingImageUrl) {
                // Display existing image if available
                var existingImg = $('<img>').attr('src', '{{ asset('') }}' + existingImageUrl).addClass(
                    'w-6/12 mx-auto rounded-lg object-cover');
                preview.append(existingImg);
            }
        }
    </script>
@endsection
