<?php

namespace App\Http\Controllers\structure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;


class AdministrationController extends Controller
{
    public function administration()
    {

         $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('structure.administration', [
            'aboutses' => $aboutses,
        ]);
    }
    public function director()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('structure.director', [
            'aboutses' => $aboutses,
        ]);
    }
    public function zamdirector()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('structure.zamdirector', [
            'aboutses' => $aboutses,
        ]);
    }
    public function zamdirector2()
    {
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('structure.zamdirector2', [
            'aboutses' => $aboutses,
        ]);
    }
}
