<?php

namespace App\Http\Controllers\header;

use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeaderController extends Controller
{

    public function header()
    {
        $cultures = Culture::orderBy('id', 'desc')->where('published', 1)->paginate(12);

        return view('layouts.header', [
            'cultures' => $cultures
        ]);
    }



    public function show($id)
    {
        $cultur = Culture::where('id', $id)->first();

        return view('layouts.show', [
            'cultur' => $cultur
        ]);
    }
}
