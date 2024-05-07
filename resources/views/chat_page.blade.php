@extends('layouts.app')

@section('content_page')
<div class="relative sm:flex min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white top-20 mb-20 overflow-y-auto h-[calc(100vh-4rem)] ">
    <div class="flex w-full h-[calc(100vh-4rem)] ">
        <aside id="sidebar" class="w-72 bg-gray-200 border-r overflow-y-auto h-screen">
            <div class="p-4">
                <h2 class="text-xl font-semibold">Chats</h2>
                <ul>
                    <li class="py-2">Chat 1</li>
                    <li class="py-2">Chat 2</li>
                    <li class="py-2">Chat 3</li>
                </ul>
            </div>
        </aside>
        <!-- Chat Content -->
        <main class="flex-1 max-h-[calc(100vh-4rem)]">
            <div class="p-4 border-b bg-neutral-950">
                <h2 class="text-xl font-semibold text-white">Chat Name</h2>
            </div>
            <div class="overflow-y-auto h-full">
                <div class="p-4 flex flex-col space-y-2">
                    @foreach ($message_content as $msg)
                        <div class="flex @if($msg->sender_id != 1) justify-end @else justify-start @endif">
                            <div class="bg-gray-300 p-2 rounded-md @if($msg->sender_id == 1) text-right @endif">
                                {{ $msg->message_content }}
                            </div>
                        </div>
                    @endforeach
                    <form action="{{ route('postMessage') }}" method="post" class="flex">
                        @csrf
                        <input type="hidden" name="receiver_id" value="2">
                        <textarea placeholder="Type your message here" class="h-10 flex-1 border rounded-md px-2 py-1" name="message_content" rows="4" cols="50"></textarea>
                        <input type="submit" value="Send" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer">
                    </form>
                </div>
            </div>
        </main>
    </div>

</div>

@endsection

{{-- <table>
    @foreach ($message_content as $msg)
        <tr>
            @if ($msg->sender_id == 1)
                <p><strong>{{ $msg->message_content }}</strong></p>
            @else
                <p>{{ $msg->message_content }}</p>
            @endif
        </tr>
    @endforeach
</table>

<form action="{{ route('postMessage') }}" method="post">
    @csrf
    <input type="hidden" name="receiver_id" value="2">
    <textarea class="w-full border rounded-md px-2 py-1" name= "message_content" name="message" rows="4" cols="50"></textarea>
    <input type="submit" value="Send Message">
</form> --}}
