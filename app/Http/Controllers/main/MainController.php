<?php

namespace App\Http\Controllers\main;
use App\Article;
use App\Book;
use App\Culture;
use App\Banner;
use App\Inst;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
         $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $bok = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(8)->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.index', [
            'banner' => $banner,
            'banners' => $banners,
            'news' => $news,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }

    public function show($id)
    {
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultur = Culture::where('id', $id)->first();
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->where('locale', \App::getLocale())->paginate(12);
        return view('culture.show', [
            'banner' => $banner,
            'banners' => $banners,
            'cultur' => $cultur,
            'cultures' => $cultures,
            'aboutses' => $aboutses,
        ]);
    }

    public function education()
    {
        // dd(app()->getLocale());
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $bok = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(8)->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.partials.education', [
            'banner' => $banner,
            'banners' => $banners,
            'news' => $news,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }


}

