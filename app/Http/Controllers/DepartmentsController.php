<?php

namespace App\Http\Controllers;
use App\Culture;
use App\Departments;
use App\HalykUniversity;
use Illuminate\Http\Request;
use App\Inst;
class DepartmentsController extends Controller
{
    public function index()
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $departs = Departments::all()->where('locale', \App::getLocale());
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('locale', \App::getLocale())->get();
        return view('departments.index', [
            'halyks' => $halyks,
            'departs' => $departs,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }



    public function show($id)
    {
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        $depart = Departments::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('departments.index', [
            'halyks' => $halyks,
            'depart' => $depart,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
