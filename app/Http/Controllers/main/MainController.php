<?php

namespace App\Http\Controllers\main;
use App\Article;
use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $news = Article::orderBy('id', 'desc')->take(4)->get();
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('main.index', [
            'news' => $news,
            'cultures' => $cultures
        ]);
    }

    public function show($id)
    {
        $cultur = Culture::where('id', $id)->first();
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('culture.show', [
            'cultur' => $cultur,
            'cultures' => $cultures
        ]);
    }

}
