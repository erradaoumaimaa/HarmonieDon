<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function allMessages(int $recieverID)
    {
        $user = auth()->user();
        $messages = Message::latest()->where('sender_id', $recieverID)->get();
        dd($messages);
    }
}
