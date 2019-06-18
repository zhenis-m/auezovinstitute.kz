<?php

namespace App\Http\Controllers\Admin;

use App\Thehird;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ThehirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.thehirds.index', [
            'thehirds' => Thehird::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.thehirds.create', [
            'thehird' => [],
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
        $thehird = Thehird::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $thehird->image = $image->getClientOriginalName();
            $thehird->image_show = Storage::disk('uploads')->put('thehirds/' . $thehird->id, $image);
            $thehird->save();
        }
        //Categories
        if ($request->input('categories')) :
            $thehird->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.thehirds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Thehird $thehird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Thehird $thehird)
    {
        return view('admin.thehirds.edit', [
            'thehird' => $thehird,
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
    public function update(Request $request, Thehird $thehird)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('thehirds/' . $thehird->id, $image);
        }

        //Update article with given data.
        $thehird->update($data);

        //Categories.
        $thehird->categories()->detach();

        if ($request->input('categories')) :
            $thehird->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.thehirds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thehird $thehird)
    {
        $thehird->categories()->detach();
        $thehird->delete();

        return redirect()->route('admin.thehirds.index');
    }
}
