<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Mass_mediaController extends Controller
{
    public function mass_media()
    {
        return view('main.mass_media');
    }
}
