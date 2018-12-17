<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $homepage = Homepage::find(1);


        //print_r(Auth::User()->Messages()->where('type', '=', 'inbox')->where('read', '=', false)->count());
        //print_r(Auth::User()->getUnreadCount());

        return view('home', ['content' => $homepage]);
    }
}
