<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use App\Log;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function index($type)
    {
        $logs = null;
        switch($type)
        {
            case 'login':
                $logs = Log::where('type', '=',  'login')->paginate(10);
            break;

            case 'register':
                $logs = Log::where('type', '=',  'register')->paginate(10);
                break;

            case 'user':
                $logs = Log::where('type', '=',  'user')->paginate(10);
                break;

            case 'security':
                $logs = Log::where('type', '=',  'security')->paginate(10);
                break;

            default:
                $logs = Log::where('type', '=', 'test')->paginate(10);
        }

        return view('admin.logs', ['left_menu' => Config::get('menu.admin')])->with('logs', $logs);
    }
}
