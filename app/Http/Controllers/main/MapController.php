<?php

namespace App\Http\Controllers\main;

use App\Altyn;
use App\Culture;
use App\HalykUniversity;
use App\Inst;
use App\Keruen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function map()
    {
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.map', [
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }



    public function show($id)
    {
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultur = Culture::where('id', $id)->first();
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        return view('culture.show', [
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'cultur' => $cultur,
            'cultures' => $cultures,
            'aboutses' => $aboutses,
        ]);
    }
}
