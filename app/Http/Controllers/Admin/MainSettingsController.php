<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MainSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {

        return view('admin.settings.menu', ['left_menu' => HomeController::menu()]);
    }
}
