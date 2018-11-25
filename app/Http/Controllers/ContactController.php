<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormValidation;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact');
    }

    public function form(ContactFormValidation $request)
    {
        $input = Input::all();
        $message = new ContactMessage();
        $message->name = $input['contact_name'];
        $message->email = $input['contact_email'];
        $message->message = $input['contact_message'];
        $message->save();

        return view('contact')->with('success', 'Your message has been sent.');
    }
}
