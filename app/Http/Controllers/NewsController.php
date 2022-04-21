<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
class NewsController extends Controller
{
    public function formNews()
    {
        return view('admin.admin-news');
    }

    public function CreateNews(Request $request)
    {
        $news = new News;
        $news->username = 'admin';
        $news->heading = $request->heading;
        $news->author = $request->author;
        $news->paraphase = $request->paraphase;
        $news->images = $request->images;
        $news->save();
        return redirect('news');
    }

    public function ShowNews()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }

   
}
