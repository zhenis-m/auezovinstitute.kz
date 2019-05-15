<?php

namespace App\Http\Controllers\departments;

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
        $departs = Departments::all();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        return view('departments.index', [
            'departs' => $departs,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $depart = Departments::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->get();
        $departs = Departments::all();
        return view('departments.show', [
            'depart' => $depart,
            'departs' => $departs,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


}
