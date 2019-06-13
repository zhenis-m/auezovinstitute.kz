<?php

namespace App\Http\Controllers\Admin;

use App\HalykUniversity;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HalykUniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.halyks.index', [
            'halyks' => HalykUniversity::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.halyks.create', [
            'halyk' => [],
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
        $halyk = HalykUniversity::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $halyk->image = $image->getClientOriginalName();
            $halyk->image_show = Storage::disk('uploads')->put('halyk/' . $halyk->id, $image);
            $halyk->save();
        }
        //Categories
        if ($request->input('categories')) :
            $halyk->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.halyks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(HalykUniversity $halyk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(HalykUniversity $halyk)
    {
        return view('admin.halyks.edit', [
            'halyk' => $halyk,
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
    public function update(Request $request, HalykUniversity $halyk)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('halyk/' . $halyk->id, $image);
        }

        //Update article with given data.
        $halyk->update($data);

        //Categories.
        $halyk->categories()->detach();

        if ($request->input('categories')) :
            $halyk->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.halyks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(HalykUniversity $halyk)
    {
        $halyk->categories()->detach();
        $halyk->delete();

        return redirect()->route('admin.halyks.index');
    }
}
