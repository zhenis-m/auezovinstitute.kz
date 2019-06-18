<?php

namespace App\Http\Controllers\science;

use App\Altyn;
use App\HalykUniversity;
use App\Keruen;
use App\Museum;
use App\Science;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Culture;
use App\Inst;
use App\SecondScience;

class SecondController extends Controller
{
    public function index()
    {
        $sciences = Science::all()->where('locale', \App::getLocale());
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $seconds = SecondScience::all()->where('locale', \App::getLocale());
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('seconds.index', [
            'sciences' => $sciences,
            'museums' => $museums,
            'altyns' => $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'seconds' => $seconds,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


    public function show($id)
    {
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $second = SecondScience::where('id', $id)->first();
        $science = Science::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('seconds.show', [
            'science' => $science,
            'museums' => $museums,
            'altyns' => $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'second' => $second,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
