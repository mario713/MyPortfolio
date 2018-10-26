<?php

namespace App\Http\Controllers\Messages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Auth::User()->Messages->where('type', '=', 'inbox')->where('delete_at',  Null);

        return view('messages.inbox')->with('messages', $messages);
    }

    public function delete($id)
    {
        $message = Auth::User()->Messages->where('id', '=', $id)->where('type', '=', 'inbox')->first();
        if(isset($message))
        {
            $message->delete_at = Carbon::now()->addDays(30);
            $message->save();
            $notify = [['type' => 'nSuccess', 'title' => 'Sukces:', 'text' => 'Wiadomość została usunięta.']];

        }
        else
        {
            $notify = [['type' => 'nFailure', 'title' => 'Niepowodzenie:', 'text' => 'Nie można znaleźć wiadomości o podanym ID!']];
        }

        $messages = Auth::User()->Messages->where('type', '=', 'inbox')->where('delete_at',  Null)->where('id', '!=', $id);

        return view('messages.inbox')->with('messages', $messages)->with('notify', $notify);
    }
}
