<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

//class ImageController extends Controller
//{
//    public function upload(Request $request)
//    {
//        $path = $request->file('image')->store('uploads', 'public');
//
//        return  view('default', ['path' => $path]);
//    }
//}