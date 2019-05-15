<?php

namespace App\Http\Controllers\structure;

use App\Director;
use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;

class DirController extends Controller
{
   public function index()
    {
       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $directors = Director::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('structure.index', [
            'directors' => $directors,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $director = Director::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('structure.show', [
            'director' => $director,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}


