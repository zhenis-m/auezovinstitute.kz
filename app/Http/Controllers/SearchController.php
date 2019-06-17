<?php

namespace App\Http\Controllers;

use App\Altyn;
use App\Article;
use App\Book;
use App\Culture;
use App\HalykUniversity;
use App\Inst;
use App\Keruen;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $query = strval($request->search);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('locale', \App::getLocale())->get();
      
        $article = Article::where('title', 'LIKE', '%' . $query . '%')->where('locale', \App::getLocale())->get();
        $books = Book::where('title', 'LIKE', '%' . $query . '%')->where('locale', \App::getLocale())->get();

//        $metas = array(
//            $article = Article::where('title', 'LIKE', '%' . $query . '%')->where('locale', \App::getLocale())->get(),
//            $books = Book::where('title', 'LIKE', '%' . $query . '%')->where('locale', \App::getLocale())->get()
//        );
        
      return  view('search', [
          'altyns' =>  $altyns,
          'keruens' => $keruens,
          'halyks' => $halyks,
          'newses' => $article,
          'aboutses' => $aboutses,
          'cultures' => $cultures,
          'books' => $books,
      ]);
    }
}

