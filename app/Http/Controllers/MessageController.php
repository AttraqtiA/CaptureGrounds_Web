<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->message_content != null) {
            DB::table('messages')->insert([
                'sender_id' =>  1,
                'receiver_id' => $request->receiver_id,
                'message_content' => $request->message_content,
            ]);
        }

        $message_content = DB::table('messages')
        ->where('sender_id', 1)
        ->orWhere('receiver_id', 1)
        ->orderBy('id')
        ->get();

        return redirect()->route('chatPage')->with(compact('message_content'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }

    public function chat_page()
    {
        $user_id = Auth::id();
        $user_id = 1;

        $message_content = [];

        $message_content = DB::table('messages')
            ->where('sender_id', $user_id)
            ->orWhere('receiver_id', $user_id)
            ->orderBy('id')
            ->get();

        return view('chat_page', compact('message_content'));
    }
}
