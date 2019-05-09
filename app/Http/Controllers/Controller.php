<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request)
    {

        $query = strval($request);
        $article = Article::where('title', 'LIKE', '%' . $query . '%')->get();

//        dd($query);
//        dd($article);

        if ($article == $query) {
            return  view('search', ['article' => $article]);
        }

    }
}
