<?php

namespace App\Http\Controllers\Admin;

use App\Director;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DirectorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.directors.index', [
            'directors' => Director::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.directors.create', [
            'director' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Grab image from the request
        $image = $request->file('image');
        //Save article
        $director = Director::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if($image !== null) {
        $director->image = $image->getClientOriginalName();
        $director->image_show = Storage::disk('uploads')->put('directors/' . $director->id, $image);
        $director->save();
        }
        //Categories
        if ($request->input('categories')) :
            $director->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        return view('admin.directors.edit', [
            'director' => $director,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if($image !== null) {
        $data['image'] = $image->getClientOriginalName();
        $data['image_show'] = Storage::disk('uploads')->put('directors/' . $director->id, $image);
        }

        //Update article with given data.
        $director->update($data);

        //Categories.
        $director->categories()->detach();

        if ($request->input('categories')) :
            $director->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.directors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->categories()->detach();
        $director->delete();

        return redirect()->route('admin.directors.index');
    }
}
