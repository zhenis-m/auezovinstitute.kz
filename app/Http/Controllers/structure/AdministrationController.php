<?php

namespace App\Http\Controllers\structure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministrationController extends Controller
{
    public function administration()
    {
        return view('structure.administration');
    }
    public function director()
    {
        return view('structure.director');
    }
    public function zamdirector()
    {
        return view('structure.zamdirector');
    }
    public function zamdirector2()
    {
        return view('structure.zamdirector2');
    }
}
