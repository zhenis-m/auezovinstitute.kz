<?php

namespace App\Http\Controllers\science;

use App\HalykUniversity;
use App\Keruen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Culture;
use App\Inst;
use App\Science;

class ScController extends Controller
{
    public function index()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $sciences = Science::all()->where('locale', \App::getLocale());
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('sciences.index', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'sciences' => $sciences,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $science = Science::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('sciences.show', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'science' => $science,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


}
