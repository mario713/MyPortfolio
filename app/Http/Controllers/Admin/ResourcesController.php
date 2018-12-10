<?php

namespace App\Http\Controllers\Admin;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UploadFileFormValidation;

class ResourcesController extends Controller
{
    public function index()
    {

        return view('admin.resources', ['left_menu' => Config::get('menu.admin')]);
    }

    public function upload(UploadFileFormValidation $request)
    {
        $path = Storage::put('files', $request->file('upload_file'));
        $input = Input::all();
        $file = new File();
        $file->title = $input['upload_title'];
        $file->description = $input['upload_description'];
        $file->path = $path;
        $file->save();

        return Redirect::back()->with('success', 'File has been uploaded.');
    }
}
