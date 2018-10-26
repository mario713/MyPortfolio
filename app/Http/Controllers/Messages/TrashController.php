<?php

namespace App\Http\Controllers\Messages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrashController extends Controller
{
    public function index()
    {
        $messages = Auth::user()->Messages->where('delete_at', '!=', Null);

        return view('messages.trash')->with('messages', $messages);
    }
}
