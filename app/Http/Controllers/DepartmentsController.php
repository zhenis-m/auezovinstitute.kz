<?php

namespace App\Http\Controllers;
use App\Departaments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index()
    {
        $departs = Departaments::all();

        return view('departments.index', [
            'departs' => $departs
        ]);
    }



    public function show($id)
    {
        $depart = Departaments::where('id', $id)->first();

        return view('departments.show', [
            'depart' => $depart
        ]);
    }
}
