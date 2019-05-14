<?php

namespace App\Http\Controllers\Abouts;
use App\Inst;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('abouts.index', [
            'aboutses' => $aboutses,
        ]);
    }



    public function show($id)
    {
        $about = Inst::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('abouts.show', [
            'about' => $about,
             'aboutses' => $aboutses,
        ]);
    }
}
