<?php

namespace App\Http\Controllers\Messages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ReadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($type, $id)
    {
        if($type == 'inbox' || $type == 'outbox')
        {
            $message = Message::where('user_id', '=', Auth::User()->id)->where('type', '=', $type)->where('id', '=', $id)->first();
            if(isset($message))
            {
                if($message->read == 0)
                {
                    $message->read = Carbon::now();
                    $message->save();
                }
                return view('messages.read', ['message' => $message]);
            }
            else
            {
                return redirect(url('/messages/'.$type))->with('error', 'Cant find any message with this ID!');
            }
        }
        else
        {
            return redirect(url('/messages/inbox'));
        }
    }

}
