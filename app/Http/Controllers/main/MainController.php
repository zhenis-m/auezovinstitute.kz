<?php

namespace App\Http\Controllers\main;
use App\Article;
use App\Culture;
use App\Inst;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.index', [
            'news' => $news,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }

    public function show($id)
    {
        $cultur = Culture::where('id', $id)->first();
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->where('locale', \App::getLocale())->paginate(12);
        return view('culture.show', [
            'cultur' => $cultur,
            'cultures' => $cultures,
            'aboutses' => $aboutses,
        ]);
    }

}
