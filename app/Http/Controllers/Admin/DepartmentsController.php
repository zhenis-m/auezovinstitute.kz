<?php

namespace App\Http\Controllers\Admin;

use App\Departments;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.departments.index', [
            'departments' => Departments::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create', [
            'department' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Grab image from the request
        $image = $request->file('image');
        //Save article
        $department = Departments::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $department->image = $image->getClientOriginalName();
            $department->image_show = Storage::disk('uploads')->put('department/' . $department->id, $image);
            $department->save();
        }
        //Categories
        if ($request->input('categories')) :
            $department->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Departments $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $department)
    {
        return view('admin.departments.edit', [
            'department' => $department,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departments $department)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('department/' . $department->id, $image);
        }

        //Update article with given data.
        $department->update($data);

        //Categories.
        $department->categories()->detach();

        if ($request->input('categories')) :
            $department->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departments $department)
    {
        $department->categories()->detach();
        $department->delete();

        return redirect()->route('admin.departments.index');
    }
}
