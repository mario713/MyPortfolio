<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirectTo($request)
    {
        return route('login');
    }

    public function index($id = null)
    {
        if($id == null)
        {
            $user = Auth::user();
            $role = $user->getRoleNames()->first();
            if(!isset($role)){ $role = 'user'; }

            return view('profile')->with(['user' => $user, 'role' => $role, 'myself' => true]);
        }
        else
        {
            $user = User::find($id);
            $role = $user->getRoleNames()->first();
            if(!isset($role)){ $role = 'user'; }

            if(isset($user))
            {
                return view('profile', ['user' => $user, 'role' => $role, 'myself' => false]);
            }
            else
            {
                return redirect(url('/profile'));
            }
        }
    }
}
