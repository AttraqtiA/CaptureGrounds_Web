@extends('layouts.app')

@section('content_page')
    <div class="container mx-auto min-h-screen w-full my-6 pt-20">
        <h1 class="text-3xl font-bold mb-6">Accepted Orders:</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10">
            <table class="w-full text-md text-left rtl:text-right text-white dark:text-white">
                <thead class="text-lg text-black uppercase bg-yellow-400 dark:bg-yellow-400 dark:text-black">
                    <tr>
                        <th scope="col" class="px-8 py-4">Customer</th>
                        <th scope="col" class="px-8 py-4">Service</th>
                        <th scope="col" class="px-8 py-4">Starting Date</th>
                        <th scope="col" class="px-8 py-4">Ending Date</th>
                        <th scope="col" class="px-8 py-4"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-8 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/customer_preview" class="hover:underline">Samuel</a>
                        </th>
                        <td class="px-8 py-6">Wedding Filming</td>
                        <td class="px-8 py-6">15 May</td>
                        <td class="px-8 py-6">25 May</td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="font-bold text-green-700 dark:text-green-600 hover:underline">DONE</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-8 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/customer_preview" class="hover:underline">Yobel</a>
                        </th>
                        <td class="px-8 py-6">Product Photography</td>
                        <td class="px-8 py-6">26 May</td>
                        <td class="px-8 py-6">30 May</td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="font-bold text-green-700 dark:text-green-600 hover:underline">DONE</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1 class="text-3xl font-bold mb-6">Orders List:</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-md text-left rtl:text-right text-white dark:text-white">
                <thead class="text-lg text-black uppercase bg-yellow-400 dark:bg-yellow-400 dark:text-black">
                    <tr>
                        <th scope="col" class="px-8 py-4">Customer</th>
                        <th scope="col" class="px-8 py-4">Service</th>
                        <th scope="col" class="px-8 py-4">Starting Date</th>
                        <th scope="col" class="px-8 py-4">Ending Date</th>
                        <th scope="col" class="px-8 py-4"></th>
                        <th scope="col" class="px-8 py-4"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-8 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/customer_preview" class="hover:underline">Samuel</a>
                        </th>
                        <td class="px-8 py-6">Holiday Photographer</td>
                        <td class="px-8 py-6">1 June</td>
                        <td class="px-8 py-6">15 June</td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="font-bold text-green-700 dark:text-green-600 hover:underline">ACCEPT</a>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="font-bold text-red-700 dark:text-red-600 hover:underline">REFUSE</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-8 py-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/customer_preview" class="hover:underline">Yobel</a>
                        </th>
                        <td class="px-8 py-6">Fashion Photography</td>
                        <td class="px-8 py-6">16 June</td>
                        <td class="px-8 py-6">18 June</td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="font-bold text-green-700 dark:text-green-600 hover:underline">ACCEPT</a>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <a href="#" class="font-bold text-red-700 dark:text-red-600 hover:underline">REFUSE</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
