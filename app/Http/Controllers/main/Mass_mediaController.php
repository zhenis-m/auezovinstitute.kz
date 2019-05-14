<?php

namespace App\Http\Controllers\main;

use App\Article;
use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Mass_mediaController extends Controller
{
    public function mass_media()
    {
        return view('main.mass_media');
    }

    public function index()
    {

        $news = Article::orderBy('id', 'desc')->take(4)->get();
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('main.mass_media', [
            'news' => $news,
            'cultures' => $cultures
        ]);
    }
}
