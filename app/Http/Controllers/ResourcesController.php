<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

class ResourcesController extends Controller
{
    use HasRoles;

    private function menu()
    {
        return [
            ['name' => 'Other', 'class' => 'download2', 'url' => url('/admin'), 'active' => false],
        ];
    }

    public function index()
    {
        $files = File::all();
        return view('resources', ['files' => $files]);
    }

    public function download($id)
    {
        $file = File::find($id);
        if(isset($id) && !empty($file))
        {
            return Storage::download($file->path);
        }
        else
        {
            return Redirect::back()->withErrors('Cant find file with that ID.');
        }
    }

    public function delete($id)
    {
        if(Auth::user()->hasRole('admin'))
        {
            $file = File::find($id);
            if(!empty($file))
            {
                Storage::delete($file->path);
                $file->delete();

                return Redirect::back()->with('success', 'File deleted.');
            }
            else
            {
                return Redirect::back()->withErrors('Cant find file with that ID!');
            }
        }
        else
        {
            return redirect(url('/resources'));
        }
    }

}
