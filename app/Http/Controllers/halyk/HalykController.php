<?php

namespace App\Http\Controllers\halyk;


use App\HalykUniversity;
use App\Culture;
use App\Keruen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;

class HalykController extends Controller
{
    public function index()
    {
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('halyks.index', [
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
        $halyk = HalykUniversity::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('halyks.show', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'halyk' => $halyk,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


}
