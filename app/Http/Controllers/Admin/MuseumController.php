<?php

namespace App\Http\Controllers\Admin;

use App\Museum;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.museums.index', [
            'museums' => Museum::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.museums.create', [
            'museums' => [],
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
        $museum = Museum::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $museum->image = $image->getClientOriginalName();
            $museum->image_show = Storage::disk('uploads')->put('museum/' . $museum->id, $image);
            $museum->save();
        }
        //Categories
        if ($request->input('categories')) :
            $museum->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.museums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('admin.museums.edit', [
            'museum' => $museum,
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
    public function update(Request $request, Museum $museum)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('museum/' . $museum->id, $image);
        }

        //Update article with given data.
        $museum->update($data);

        //Categories.
        $museum->categories()->detach();

        if ($request->input('categories')) :
            $museum->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.museums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        $museum->categories()->detach();
        $museum->delete();

        return redirect()->route('admin.museums.index');
    }
}
