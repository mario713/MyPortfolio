<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homepage = Homepage::find(1);

        return view('home', ['content' => $homepage]);
    }
}
