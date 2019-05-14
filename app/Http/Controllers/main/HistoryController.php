<?php

namespace App\Http\Controllers\main;

use App\Article;
use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function history()
    {
        return view('main.history');
    }

    public function index()
    {

        $news = Article::orderBy('id', 'desc')->take(4)->get();
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('main.history', [
            'news' => $news,
            'cultures' => $cultures
        ]);
    }
}
