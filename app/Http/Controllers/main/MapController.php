<?php

namespace App\Http\Controllers\main;

use App\Culture;
use App\Inst;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function map()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('main.map', [
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }



    public function show($id)
    {
        $cultur = Culture::where('id', $id)->first();
        $cultures = Culture::orderBy('id', 'desc')->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('culture.show', [
            'cultur' => $cultur,
            'cultures' => $cultures,
            'aboutses' => $aboutses,
        ]);
    }
}
