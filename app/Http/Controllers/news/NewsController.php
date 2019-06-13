<?php
namespace App\Http\Controllers\news;
use App\Article;
use App\Culture;
use App\HalykUniversity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;

class NewsController extends Controller
{
    public function index()
    {

       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $newses = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('news.index', [
            'halyks' => $halyks,
            'newses' => $newses,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $news = Article::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('news.show', [
            'halyks' => $halyks,
            'news' => $news,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


}
