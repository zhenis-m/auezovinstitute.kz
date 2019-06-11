<?php

namespace App\Http\Controllers\Admin;

use App\Science;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ScienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sciences.index', [
            'sciences' => Science::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sciences.create', [
            'science' => [],
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
        $science = Science::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $science->image = $image->getClientOriginalName();
            $science->image_show = Storage::disk('uploads')->put('sciences/' . $science->id, $image);
            $science->save();
        }
        //Categories
        if ($request->input('categories')) :
            $science->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.sciences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Science $science)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Science $science)
    {
        return view('admin.sciences.edit', [
            'science' => $science,
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
    public function update(Request $request, Science $science)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('sciences/' . $science->id, $image);
        }

        //Update article with given data.
        $science->update($data);

        //Categories.
        $science->categories()->detach();

        if ($request->input('categories')) :
            $science->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.sciences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Science $science)
    {
        $science->categories()->detach();
        $science->delete();

        return redirect()->route('admin.sciences.index');
    }
}
