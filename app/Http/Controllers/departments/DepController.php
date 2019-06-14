<?php

namespace App\Http\Controllers\departments;

use App\HalykUniversity;
use App\Keruen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Culture;
use App\Inst;
use App\Departments;

class DepController extends Controller
{

    public function index()
    {
       // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $departs = Departments::all()->where('locale', \App::getLocale());
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('departments.index', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'departs' => $departs,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $depart = Departments::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $departs = Departments::all();
        return view('departments.show', [
            'keruens' => $keruens,
            'halyks' => $halyks,
            'depart' => $depart,
            'departs' => $departs,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


}
