<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function map()
    {
        return view('main.map');
    }
}
