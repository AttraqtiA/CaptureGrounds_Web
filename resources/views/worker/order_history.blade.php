@extends('layouts.app')

@section('content_page')
    <div class="container mx-auto min-h-screen w-full my-4 pt-20">
        <h1>Accepted Orders:</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full min-h-40 text-sm text-left rtl:text-right text-white dark:text-white">
                <thead class="text-xs text-black uppercase bg-yellow-400 dark:bg-yellow-400 dark:text-black">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Service
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Starting Date
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Ending Date
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#" class="hover:underline">Samuel</a>
                        </th>
                        <td class="px-6 py-4">
                            Wedding Filming
                        </td>
                        <td class="px-6 py-4">
                            15 May
                        </td>
                        <td class="px-6 py-4">
                            25 May
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline">DONE</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#" class="hover:underline">Yobel</a>
                        </th>
                        <td class="px-6 py-4">
                            Product Photography
                        </td>
                        <td class="px-6 py-4">
                            26 May
                        </td>
                        <td class="px-6 py-4">
                            30 May
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline">DONE</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br>

        <h1>Orders List:</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full min-h-40 text-sm text-left rtl:text-right text-white dark:text-white">
                <thead class="text-xs text-black uppercase bg-yellow-400 dark:bg-yellow-400 dark:text-black">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Service
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Starting Date
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Ending Date
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#" class="hover:underline">Samuel</a>
                        </th>
                        <td class="px-6 py-4">
                            Holiday Photographer
                        </td>
                        <td class="px-6 py-4">
                            1 June
                        </td>
                        <td class="px-6 py-4">
                            15 June
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline">ACCEPT</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">REFUSE</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-neutral-950 dark:border-neutral-950">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="#" class="hover:underline">Yobel</a>
                        </th>
                        <td class="px-6 py-4">
                            Fashion Photography
                        </td>
                        <td class="px-6 py-4">
                            16 June
                        </td>
                        <td class="px-6 py-4">
                            18 June
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-green-600 dark:text-green-500 hover:underline">ACCEPT</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">REFUSE</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
