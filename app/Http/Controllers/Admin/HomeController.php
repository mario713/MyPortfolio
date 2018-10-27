<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private function menu()
    {
        return  [
            ['name' => 'Main Settings', 'class' => 'main', 'url' => url('/admin'), 'active' => true],
            ['name' => 'News', 'class' => 'news', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Tutorials', 'class' => 'tutorials', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Tools', 'class' => 'tools', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Resources', 'class' => 'resources', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Portfolio', 'class' => 'portfolio', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Contact', 'class' => 'contact', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Logs', 'class' => 'logs', 'url' => '#', 'active' => false, 'submenu' => [
                ['name' => 'User Logs', 'url' => url('/admin/logs/user')],
                ['name' => 'Login Logs', 'url' => url('/admin/logs/login')],
                ]],
            ['name' => 'Users', 'class' => 'user', 'url' => url('/admin'), 'active' => false],
        ];
    }

    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function redirectTo($request)
    {
        return redirect(url('/'));
    }

    public function index()
    {

        return view('admin.home', ['left_menu' => $this->menu()]);
    }

}
