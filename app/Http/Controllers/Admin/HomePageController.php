<?php

namespace App\Http\Controllers\Admin;

use App\Homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

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

        return view('admin.homepage', ['left_menu' => HomeController::menu(), 'homepage' => $homepage, 'preview' => $preview]);
    }
}
