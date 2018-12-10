<?php

namespace App\Http\Controllers\Admin;

use App\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function redirectTo($request)
    {
        return redirect(url('/'));
    }

    public function index()
    {
        return view('admin.home', ['left_menu' => Config::get('menu.admin')]);
    }

}
