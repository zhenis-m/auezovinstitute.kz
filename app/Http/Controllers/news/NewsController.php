<?php

namespace App\Http\Controllers\news;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $newses = Article::orderBy('id', 'desc')->where('published', 1)->paginate(12);

        return view('news.index', [
            'newses' => $newses
        ]);
    }



    public function show($id)
    {
        $news = Article::where('id', $id)->first();

        return view('news.show', [
            'news' => $news
        ]);
    }


}
