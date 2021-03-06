<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserInfoFormValidation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;

class UserInfoController extends Controller
{
    public function index()
    {
        return view('settings.userinfo', ['left_menu' => Config::get('menu.settings')]);
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

        return view('settings.userinfo', ['left_menu' => Config::get('menu.settings')])->with('success', 'Your info has been updated.');
    }
}
