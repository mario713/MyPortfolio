<?php

namespace App\Http\Controllers\settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserInfoFormValidation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirectTo($request)
    {
        return route('login');
    }

    private function menu()
    {
        return  [
            ['name' => 'User Info', 'class' => 'dash', 'url' => url('/settings'), 'active' => true],
            ['name' => 'Pass Change', 'class' => 'login', 'url' => url('/settings/passchange'), 'active' => false],
        ];
    }

    public function index()
    {
        return view('settings/userinfo', ['left_menu' => $this->menu()]);
    }

    public function form(UserInfoFormValidation $request)
    {
        $user = Auth::user();
        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        if(Input::get('hide_name') == 'on')
        {
            $user->show_name = false;
        }
        else
        {
            $user->show_name = true;
        }
        if(Input::get('hide_email') == 'on')
        {
            $user->show_email = false;
        }
        else
        {
            $user->show_email = true;
        }
        $user->save();

        return view('/settings/userinfo', ['left_menu' => $this->menu()])->with('success', 'Your info has been updated.');
    }
}
