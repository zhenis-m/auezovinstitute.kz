<?php

namespace App\Http\Controllers\main;
use App\Article;
use App\Inst;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $news = Article::orderBy('id', 'desc')->take(4)->get();
         $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('main.index', [
            'news' => $news,
            'aboutses' => $aboutses,
        ]);
    }
}
