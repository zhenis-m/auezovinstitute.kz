<?php

namespace App\Http\Controllers\main;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $news = Article::orderBy('id', 'desc')->take(4)->get();
        return view('main.index', [
            'news' => $news
        ]);
    }
}
