<?php

namespace App\Http\Controllers\Admin;

use App\Homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomePageController extends Controller
{
    public function index()
    {
        $preview = null;
        $homepage = Homepage::find(1);

        $request = Request();
        if($request->isMethod('post'))
        {
            $input = Input::all();
            if($input['preview'] == 0)
            {
                if(!isset($homepage)){$homepage = new Homepage();}
                $homepage->title = $input['title'];
                $homepage->description = $input['content'];
                $homepage->edited_by = Auth::User()->id;
                $homepage->save();
            }
            else
            {
                $preview['title'] = $input['title'];
                $preview['content'] = $input['content'];
            }
        }

        return view('admin.homepage', ['left_menu' => Config::get('menu.admin'), 'homepage' => $homepage, 'preview' => $preview]);
    }
}
