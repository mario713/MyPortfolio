<?php

namespace App\Http\Controllers\Admin\News;

use App\Category;
use App\Http\Requests\NewsAddFormValidation;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        $categories = Category::all();


        return view('admin.news.add', ['left_menu' => Config::get('menu.admin'), 'categories' => $categories]);
    }

    public function add_form(NewsAddFormValidation $request)
    {
        $input = Input::all();
        $category = Category::find($input['cat_id']);
        if(isset($category))
        {
            $news = new News;
            $news->cat_id = $input['cat_id'];
            $news->title = $input['news_title'];
            $news->content = $input['news_content'];
            $news->user_id = Auth::user()->id;
            $news->save();
        }
        return redirect('/admin/news/manage');
    }

    public function edit($id)
    {
        $news = News::find($id);

        $categories = Category::all();

        return view('admin.news.edit', ['left_menu' => Config::get('menu.admin'), 'categories' => $categories, 'edit_news' => $news]);
    }

    public function edit_form($id, NewsAddFormValidation $request)
    {
        $input = Input::all();
        $category = Category::find($input['cat_id']);
        if(isset($category))
        {
            $news = News::find($id);
            if(isset($news))
            {
                $news->cat_id = $input['cat_id'];
                $news->title = $input['news_title'];
                $news->content = $input['news_content'];
                $news->save();

                return redirect(url('/admin/news/manage'));
            }
            else
            {
                return Redirect::back()->withErrors('Cant find news with that ID!');
            }
        }
        return redirect(url('/admin/news/manage'));
    }
}
