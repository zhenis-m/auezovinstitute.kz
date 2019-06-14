<?php

namespace App\Http\Controllers\Admin;

use App\Keruen;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KeruenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.keruens.index', [
            'keruens' => Keruen::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keruens.create', [
            'keruens' => [],
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
        $keruen = Keruen::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $keruen->image = $image->getClientOriginalName();
            $keruen->image_show = Storage::disk('uploads')->put('keruen/' . $keruen->id, $image);
            $keruen->save();
        }
        //Categories
        if ($request->input('categories')) :
            $keruen->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.keruens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Keruen $keruen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Keruen $keruen)
    {
        return view('admin.keruens.edit', [
            'keruen' => $keruen,
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
    public function update(Request $request, Keruen $keruen)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('keruen/' . $keruen->id, $image);
        }

        //Update article with given data.
        $keruen->update($data);

        //Categories.
        $keruen->categories()->detach();

        if ($request->input('categories')) :
            $keruen->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.keruens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keruen $keruen)
    {
        $keruen->categories()->detach();
        $keruen->delete();

        return redirect()->route('admin.keruens.index');
    }
}
