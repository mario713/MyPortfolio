<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    private function menu()
    {
        return [
            ['name' => 'Other', 'class' => 'download2', 'url' => url('/admin'), 'active' => false],
        ];
    }

    public function index()
    {

        return view('resources.index');
    }
}
