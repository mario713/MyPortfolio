<?php

namespace App\Http\Controllers\Admin;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index($id = null)
    {
        $read = null;
        if(isset($id))
        {
            $read = ContactMessage::find($id);
            if(!isset($read))
            {
                return Redirect::back()->withErrors('There is no contact message with this ID!');
            }
            else
            {
                if($read->read == false)
                {
                    $read->read = true;
                    $read->save();
                }
            }
        }
        $msg = ContactMessage::get();

        return view('admin.contact', ['left_menu' => Config::get('menu.admin'), 'msg' => $msg, 'read' => $read]);
    }

    public function delete($id)
    {
        $msg = ContactMessage::find($id);
        if(isset($msg))
        {
            $msg->delete();
            return Redirect::back()->with('success', 'Contact message with given ID has been deleted.');
        }
        else
        {
            return Redirect::back()->withErrors('There is no contact message with this ID!');
        }

    }
}
