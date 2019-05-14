<?php

namespace App\Http\Controllers;
use App\Departaments;
use Illuminate\Http\Request;
use App\Inst;
class DepartmentsController extends Controller
{
    public function index()
    {
        $departs = Departaments::all();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('departments.index', [
            'departs' => $departs,
            'aboutses' => $aboutses,
        ]);
    }



    public function show($id)
    {
        $depart = Departaments::where('id', $id)->first();
         $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        return view('departments.show', [
            'depart' => $depart,
            'aboutses' => $aboutses,
        ]);
    }
}
