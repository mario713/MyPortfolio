<?php

namespace App\Http\Controllers\Messages;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewMessageFormValidation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Message;

class NewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($username = null)
    {
        return view('messages.new_message')->with('username', $username);
    }

    public function form($username = null, NewMessageFormValidation $request)
    {
        $input = Input::all();

        if(strlen($input['recipient']) > 3 && strlen($input['recipient']) <= 16)
        {
            $username = $input['recipient'];
        }

        $user = User::where('username', '=', $username)->get()->first();
        if(isset($user))
        {
            $message = new Message;
            $message->user_id = $user->id;
            $message->type = 'inbox';
            $message->from = Auth::user()->username;
            $message->to = $input['recipient'];
            $message->title = $input['title'];
            $message->content = $input['content'];
            $message->save();

            $message = new Message;
            $message->user_id = Auth::user()->id;
            $message->type = 'outbox';
            $message->from = Auth::user()->username;
            $message->to = $input['recipient'];
            $message->title = $input['title'];
            $message->content = $input['content'];
            $message->save();

            return view('messages.new_message')->with('success', 'Wiadomość została wysłana.');
        }
        else
        {
            return view('messages.new_message')->withErrors(['message' => 'Podany użytkownik nie istnieje!'])->with('username', $username);
        }
        return view('messages.new_message')->with('username', $username);
    }
}
