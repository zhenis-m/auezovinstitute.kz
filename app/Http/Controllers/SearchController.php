<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = strval($request->search);
      
        $article = Article::where('title', 'LIKE', '%' . $query . '%')->get();
        
      return  view('search', ['newses' => $article]);
        
    }
}
