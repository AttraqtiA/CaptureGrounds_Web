@extends('layouts.app')

@section('content_page')
    <div class=" pt-36 md:pt-40 lg:pt-40 p-10 md:p-12 lg:p-20 mx-auto">
        <h1 class="mb-10 text-4xl font-extrabold leading-none tracking-tight text-gray-900 text-2xl md:text-5xl text-center">
            Your <span class="underline underline-offset-3 decoration-8 decoration-yellow-400">Projects</span></h1>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 place-content-center">
            @foreach ($customerProjects as $customerProject)
                <div class="w-full rounded-lg shadow bg-white relative text-center md:text-left">
                    <img class="rounded-lg w-full" src="/images/{{ $customerProject->Services->image }}"
                        alt="{{ $customerProject->Services->title }}" />
                    @if ($customerProject->acceptedStatus == 'yes')
                        <span
                            class="m-3 absolute top-0 right-0 bg-green-100 text-green-800 text-sm sm:text-md font-medium px-2.5 py-0.5 rounded-full m-2 dark:bg-green-900 dark:text-green-300">Accepted</span>
                    @else
                        <span
                            class="m-3 absolute top-0 right-0 bg-red-100 text-red-800 text-sm sm:text-md font-medium px-2.5 py-0.5 rounded-full m-2 dark:bg-red-900 dark:text-red-300">Not
                            Accepted Yet</span>
                    @endif
                    @if ($customerProject->finishedStatus == 'yes')
                        <span
                            class="m-3 absolute top-8 right-0 bg-green-100 text-green-800 text-sm sm:text-md font-medium px-2.5 py-0.5 rounded-full m-2 dark:bg-green-900 dark:text-green-300">Finished</span>
                    @else
                        <span
                            class="m-3 absolute top-8 right-0 bg-red-100 text-red-800 text-sm sm:text-md font-medium px-2.5 py-0.5 rounded-full m-2 dark:bg-red-900 dark:text-red-300">Not
                            Finished Yet</span>
                    @endif
                    <div class="p-5">
                        <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900">
                            {{ $customerProject->Services->title }}</h5>
                        <p class="mb-2 text-md font-medium text-gray-700">Date started: <span
                                class="font-bold text-yellow-400">{{ $customerProject->startingDate }}</span></p>
                        <p class="mb-2 text-md font-medium text-gray-700">Date ended: <span
                                class="font-bold text-yellow-400">{{ $customerProject->endingDate }}</span></p>
                        <p class="mb-6 text-md font-medium text-gray-700">Total payment: <span
                                class="font-bold text-yellow-400">Rp.
                                {{ number_format($customerProject->totalPayment) }}</span></p>
                        @if ($customerProject->finishedStatus == 'yes')
                        <a href="{{ route('projectList.show', ['project' => $customerProject->id]) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-900 rounded-lg focus:ring-4 focus:outline-none">
                                Project Detail
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        @else
                            <a href="#"
                                class="cursor-not-allowed inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-400 rounded-lg focus:ring-4 focus:outline-none"
                                disabled>
                                Project Detail
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center items-center mt-12 mb-8">
            {{ $customerProjects->links() }}
        </div>
    </div>
@endsection
