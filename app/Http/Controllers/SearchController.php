<?php

namespace App\Http\Controllers;

use App\Article;
use App\Culture;
use App\Inst;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = strval($request->search);
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
      
        $article = Article::where('title', 'LIKE', '%' . $query . '%')->get();
        
      return  view('search', [
          'newses' => $article,
          'aboutses' => $aboutses,
          'cultures' => $cultures,
      ]);
        
    }
}
