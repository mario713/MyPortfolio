<?php

namespace App\Http\Controllers\Admin\News;

use App\Category;
use App\Http\Requests\NewsCategoryFormValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index($action = null, $id = null)
    {
        $cat_edit = null;

        switch($action)
        {
            case 'edit':
                if(isset($id))
                {
                    $category = Category::find($id);
                    if(isset($category))
                    {
                        $cat_edit = $category;
                    }
                    else
                    {
                        return Redirect::back()->withErrors('You cant edit category that doesnt exists.');
                    }
                }
                break;

            case 'delete':
                if(isset($id))
                {
                    $category = Category::find($id);
                    if(isset($category))
                    {
                        $category->delete();

                        return redirect(url('/admin/news/categories'));
                    }
                    else
                    {
                        return Redirect::back()->withErrors('Category you want to delete doesnt exists.');
                    }
                }
                else
                {
                    return Redirect::back()->withErrors('Category ID is empty!');
                }
                break;

            case 'move_down':
                if(isset($id))
                {
                    $category = Category::find($id);
                    if(isset($category))
                    {
                        $category->order += 1;
                        $category->save();

                        return redirect(url('/admin/news/categories'));
                    }
                    else
                    {
                        return Redirect::back()->withErrors('Category you want to move down doesnt exists.');
                    }
                }
                else
                {
                    return Redirect::back()->withErrors('Category ID is empty!');
                }
                break;

            case 'move_up':
                if(isset($id))
                {
                    $category = Category::find($id);
                    if(isset($category))
                    {
                        if($category->order > 1)
                        {
                            $category->order -= 1;
                            $category->save();
                        }

                        return redirect(url('/admin/news/categories'));
                    }
                    else
                    {
                        return Redirect::back()->withErrors('Category you want to move up doesnt exists.');
                    }
                }
                else
                {
                    return Redirect::back()->withErrors('Category ID is empty!');
                }
                break;
        }
        $cat_order = DB::table('categories')->select('order')->orderBy('order', 'DESC')->first();
        if(!isset($cat_order)){$cat_order = new Category; $cat_order->order = 0;}
        $categories = DB::table('categories')->orderBy('order', 'ASC')->get();

        return view('admin.news.categories', ['left_menu' => HomeController::menu(), 'categories' => $categories, 'cat_order' => $cat_order->order+1, 'cat_edit' => $cat_edit]);
    }

    public function form($action = null, $id = null, NewsCategoryFormValidation $request)
    {
        switch($action)
        {
            case 'add':
                $input = Input::all();
                $category = new Category();
                $category->name = Input::get('category_name');
                $category->order = Input::get('category_order');
                $category->save();

                return redirect(url('/admin/news/categories'));
                break;

            case 'edit':
                if(isset($id))
                {
                    $category = Category::find($id);
                    if(isset($category))
                    {
                        $input = Input::all();
                        $category->name = $input['category_name'];
                        $category->order = $input['category_order'];
                        $category->save();

                        return redirect(url('/admin/news/categories'));
                    }
                    else
                    {
                        return Redirect::back()->withErrors('Cant find category to edit!');
                    }
                }
                else
                {
                    return Redirect::back()->withErrors('Category ID is empty! Cant edit that!');
                }
                break;
        }

        return redirect(url('/admin/news/categories'));
    }

}
