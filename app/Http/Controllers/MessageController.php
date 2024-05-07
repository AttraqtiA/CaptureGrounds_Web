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
                'sender_id' =>  Auth::id(),
                'receiver_id' => $request->receiver_id,
                'message_content' => $request->message_content,
            ]);
        }

        return redirect()->route('chatPage', ['id' => $request->receiver_id,]);
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

    public function chat_page($id)
    {
        $user_id = Auth::id();
        $contacted_id = $id;

        $message_content = [];

        $message_content = DB::table('messages')
            ->where(function($query) use ($user_id, $contacted_id) {
                $query->where('sender_id', $user_id)
                        ->where('receiver_id', $contacted_id);
            })
            ->orWhere(function($query) use ($user_id, $contacted_id) {
                $query->where('sender_id', $contacted_id)
                        ->where('receiver_id', $user_id);
            })
            ->orderBy('id')
            ->get();

        $users = DB::table('users')->get();
        $contacted_user = DB::table('users')->where('id', $id)->first();

        return view('chat_page', compact('message_content', 'users', 'user_id', 'contacted_id', 'contacted_user'));
    }
}
