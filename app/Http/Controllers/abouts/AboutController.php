<?php

namespace App\Http\Controllers\Abouts;
use App\Culture;
use App\HalykUniversity;
use App\Inst;
use App\Category;
use App\Keruen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('abouts.index', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $about = Inst::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('abouts.show', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'about' => $about,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
