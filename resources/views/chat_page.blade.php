@extends('layouts.app')

@section('content_page')
    {{-- =======Sidebar goes heree!!======= --}}
    <aside
        id="default-sidebar"class="z-40 border-r absolute m



        t-20 left-0 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white light:bg-white">
            <h2 class="text-xl font-semibold">Chats</h2>
            <ul>
                @foreach ($users as $users)
                    @if ($users->id != $user_id)
                        <li class="py-2 flex items-center">
                            <img src="https://t4.ftcdn.net/jpg/00/65/77/27/360_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg" class="h-6 w-6 mr-2" alt="Person Logo">
                            <a href="{{ route('chatPage', ['id' => $users->id]) }}">
                                @if ($users->id == $contacted_id)
                                    <strong>
                                        {{ $users->name }}
                                    </strong>
                                @else
                                    {{ $users->name }}
                                @endif
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </aside>
    {{-- ================================= --}}

    {{-- =======Chatbar Goes Here!!======= --}}
    <div class="h-[calc(100vh-5rem)] z-40 mt-20 sm:ml-64 overflow-y-auto custom-class">
        <div class="">
            <div class="flex items-center p-4 border-b bg-neutral-950">
                <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                    aria-controls="default-sidebar" type="button"
                    class="inline-flex items-center me-3 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <h2 class="text-xl font-semibold text-white">Chatting with: {{ $contacted_user->name }}</h2>
            </div>
            <div class="max-h-[calc(100vh-4rem)]">
                <div class="p-4 flex flex-col space-y-2">
                    @foreach ($message_content as $msg)
                        <div class="flex @if ($msg->sender_id == $user_id) justify-end @else justify-start @endif">
                            <div
                                class="p-2 rounded-md @if ($msg->sender_id == $user_id) bg-yellow-400 text-right  @else bg-gray-300 @endif">
                                {{ $msg->message_content }}
                            </div>
                        </div>
                    @endforeach
                    <form action="{{ route('postMessage') }}" method="post" class="flex">
                        @csrf
                        <input type="hidden" name="sender_id" value="{{ $user_id }}">
                        <input type="hidden" name="receiver_id" value="{{ $contacted_id }}">
                        <textarea placeholder="Type your message here" class="h-10 flex-1 border rounded-md px-2 py-1" name="message_content"
                            rows="4" cols="50"></textarea>
                        <input type="submit" value="Send"
                            class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- ================================= --}}
@endsection

{{-- <div class="relative sm:flex min-h-[calc(100vh-5rem)] bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white top-20 mb-20 overflow-y-auto">
        <div class="flex w-full h-[calc(100vh-5rem)] overflow-y-hidden">
            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
             </button>
            <aside id="default-sidebar" class="w-72 bg-gray-200 border-r overflow-y-auto h-screen transition-transform -translate-x-full sm:translate-x-0">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Chats</h2>
                    <ul>
                        @foreach ($users as $users)
                            @if ($users->id != $user_id)
                                <li class="py-2 flex items-center">
                                    <img src="/path/to/person-logo.svg" class="h-6 w-6 mr-2" alt="Person Logo">
                                    <a href="{{ route('chatPage', ['id' => $users->id]) }}">
                                        @if ($users->id == $contacted_id)
                                            <strong>
                                                {{ $users->name }}
                                            </strong>
                                        @else
                                        {{ $users->name }}
                                        @endif
                                    </a>
                                </li>
                                @endif
                        @endforeach
                    </ul>
                </div>
            </aside>
            <main class="flex-1 max-h-[calc(100vh-4rem)] overflow-y-auto">
                <div class="p-4 border-b bg-neutral-950">
                    <h2 class="text-xl font-semibold text-white">Chat Name</h2>
                </div>
                <div class="max-h-[calc(100vh-4rem)]">
                    <div class="p-4 flex flex-col space-y-2">
                        @foreach ($message_content as $msg)
                            <div class="flex @if ($msg->sender_id == $user_id) justify-end @else justify-start @endif">
                                <div
                                    class="p-2 rounded-md @if ($msg->sender_id == 1) bg-yellow-400 text-right @else bg-gray-300 @endif">
                                    {{ $msg->message_content }}
                                </div>
                            </div>
                        @endforeach
                        <form action="{{ route('postMessage') }}" method="post" class="flex">
                            @csrf
                            <input type="hidden" name="sender_id" value="{{ $user_id }}">
                            <input type="hidden" name="receiver_id" value="{{ $contacted_id }}">
                            <textarea placeholder="Type your message here" class="h-10 flex-1 border rounded-md px-2 py-1" name="message_content"
                                rows="4" cols="50"></textarea>
                            <input type="submit" value="Send"
                                class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer">
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div> --}}
