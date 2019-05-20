<?php

namespace App\Http\Controllers\banners;

use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;
use Illuminate\Http\Request;

class bannersBannersoutController extends Controller
{
     public function index()
    {

       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('layouts.banner', [
            'banners' => $banners,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {   
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.show', [
            'banner' => $banner,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


}
