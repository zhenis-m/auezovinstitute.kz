<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MuseumController extends Controller
{
    public function museum()
    {
        return view('main.museum');
    }
}
