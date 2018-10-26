<?php

namespace App\Http\Controllers\Settings;

use App\Http\Requests\PassChangeFormValidation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class PassChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function menu()
    {
        return  [
            ['name' => 'User Info', 'class' => 'dash', 'url' => url('/settings'), 'active' => false],
            ['name' => 'Pass Change', 'class' => 'login', 'url' => url('/settings/passchange'), 'active' => true],
        ];
    }

    public function index()
    {
        return view('settings.passchange', ['left_menu' => $this->menu()]);
    }

    public function form(PassChangeFormValidation $request)
    {
        $user = Auth::user();

        if(password_verify(Input::get('old_pass'), $user->getAuthPassword()))
        {
            if(Input::get('new_pass') == Input::get('confirm_new_pass'))
            {
                $user->password = bcrypt(Input::get('new_pass'));
                $user->save();

                return view('/settings/passchange', ['left_menu' => $this::menu()])->with('success', 'Your password has been changed.');
            }
            else
            {
                return view('/settings/passchange', ['left_menu' => $this::menu()])->withErrors("Passwords doesn't match! Confirm new password.");
            }
        }
        else
        {
            return view('/settings/passchange', ['left_menu' => $this::menu()])->withErrors('Password is incorrect!');
        }
    }
}
