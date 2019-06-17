<?php

namespace App\Http\Controllers\main;
use App\Altyn;
use App\Article;
use App\Book;
use App\Culture;
use App\Banner;
use App\HalykUniversity;
use App\Inst;
use App\Keruen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
         $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $bok = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(8)->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.index', [
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
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
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultur = Culture::where('id', $id)->first();
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->where('locale', \App::getLocale())->paginate(12);
        return view('culture.show', [
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'banner' => $banner,
            'banners' => $banners,
            'cultur' => $cultur,
            'cultures' => $cultures,
            'aboutses' => $aboutses,
        ]);
    }

    public function education()
    {
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        // dd(app()->getLocale());
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $bok = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(8)->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.partials.education', [
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'banner' => $banner,
            'banners' => $banners,
            'news' => $news,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }
}

