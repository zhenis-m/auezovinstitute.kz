<?php

namespace App\Http\Controllers;
use App\Culture;
use App\Departments;
use Illuminate\Http\Request;
use App\Inst;
class DepartmentsController extends Controller
{
    public function index()
    {
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
        return view('departments.show', [
            'depart' => $depart,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
