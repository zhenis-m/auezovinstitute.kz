<?php

namespace App\Http\Controllers\structure;

use App\Director;
use App\Culture;
use App\HalykUniversity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;


class AdministrationController extends Controller
{
    public function administration()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $directors = Director::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        return view('structure.administration', [
            'halyks' => $halyks,
            'directors' => $directors,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
    public function director($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $director = Director::where('id', $id)->where('locale', \App::getLocale())->first();
        return view('structure.director', [
            'halyks' => $halyks,
            'director' => $director,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
    public function zamdirector()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('structure.zamdirector', [
            'halyks' => $halyks,
            'director' => $director,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
    public function zamdirector2()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('structure.zamdirector2', [
            'halyks' => $halyks,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


     public function index()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $directors = Director::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('structure.index', [
            'halyks' => $halyks,
            'directors' => $directors,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $director = Director::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('structure.show', [
            'halyks' => $halyks,
            'director' => $director,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
