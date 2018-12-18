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

    public function inbox($id)
    {

        $message = Message::where('user_id', '=', Auth::User()->id)->where('type', '=', 'inbox')->where('id', '=', $id)->first();
        if(isset($message))
        {
            if($message->read == 0)
            {
                $message->read = Carbon::Now();
                $message->save();
            }
            return view('messages.read', ['message' => $message]);
        }
        else
        {
            return redirect(url('/messages/inbox'));
        }

    }

    public function outbox($id)
    {

        $message = Message::where('user_id', '=', Auth::User()->id)->where('type', '=', 'outbox')->where('id', '=', $id)->first();
        if(isset($message))
        {
            if($message->read == 0)
            {
                $message->read = Carbon::Now();
                $message->save();
            }
            return view('messages.read', ['message' => $message]);
        }
        else
        {
            return redirect(url('/messages/outbox'));
        }

    }
}
