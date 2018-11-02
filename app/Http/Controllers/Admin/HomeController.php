<?php

namespace App\Http\Controllers\Admin;

use App\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public static function menu()
    {
        return  [
            ['name' => 'Main Settings', 'class' => 'main', 'url' => url('/admin'), 'active' => false],
            ['name' => 'News', 'class' => 'news', 'url' => url('#'), 'active' => false, 'submenu' => [
                ['name' => 'Add News', 'url' => url('/admin/news/add')],
                ['name' => 'Manage News', 'url' => url('/admin/news/manage')],
                ['name' => 'Categories', 'url' => url('/admin/news/categories')],
            ]],
            ['name' => 'Tutorials', 'class' => 'tutorials', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Tools', 'class' => 'tools', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Resources', 'class' => 'resources', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Portfolio', 'class' => 'portfolio', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Contact', 'class' => 'contact', 'url' => url('/admin'), 'active' => false],
            ['name' => 'Logs', 'class' => 'logs', 'url' => '#', 'active' => false, 'submenu' => [
                ['name' => 'Login', 'url' => url('/admin/logs/login')],
                ['name' => 'Register', 'url' => url('/admin/logs/register')],
                ['name' => 'User', 'url' => url('/admin/logs/user')],
                ['name' => 'Security', 'url' => url('/admin/logs/security')],
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
        /*
        $log = new Log();
        $log->type = 'test';
        $log->user_id = null;
        $log->log = 'This is test log :)';
        $log->client_ip = \Request::ip();
        $log->date = Carbon::now();
        $log->save();
        */

        return view('admin.home', ['left_menu' => $this->menu()]);
    }

}
