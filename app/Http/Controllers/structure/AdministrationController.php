<?php

namespace App\Http\Controllers\structure;

use App\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;


class AdministrationController extends Controller
{
    public function administration()
    {

        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('structure.administration', [
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
    public function director()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('structure.director', [
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
    public function zamdirector()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('structure.zamdirector', [
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
    public function zamdirector2()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('structure.zamdirector2', [
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
