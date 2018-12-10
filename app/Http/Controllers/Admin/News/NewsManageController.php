<?php

namespace App\Http\Controllers\Admin\News;

use App\Category;
use App\Http\Controllers\Admin\HomeController;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class NewsManageController extends Controller
{
    public function index()
    {
        $content = null;
        $categories = Category::orderBy('order', 'ASC')->get();
        foreach($categories as $cat)
        {
            $news = null;
            $news = DB::table('news')->where('cat_id', '=', $cat['id'])->orderBy('created_at', 'DESC')->get();

            $content[] = [
                'cat_id' => $cat['id'],
                'cat_name' => $cat['name'],
                'cat_order' => $cat['order'],
                'news' => $news,
            ];
        }

        return view('admin.news.manage', ['left_menu' => Config::get('menu.admin'), 'content' => $content]);
    }

    public function delete($id)
    {
        if(isset($id))
        {
            $news = News::find($id);
            if(isset($news))
            {
                $news->delete();

                return Redirect::back();
            }
            else
            {
                return redirect(url('/admin/news/manage'))->with('error', 'Cant find news with this ID!');
            }
        }
    }
}
