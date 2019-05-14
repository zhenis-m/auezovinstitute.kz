<?php

namespace App\Http\Controllers\Admin;

use App\Culture;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cultures.index', [
            'cultures' => Culture::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cultures.create', [
            'culture' => [],
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
        $culture = Culture::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if($image !== null) {
        $culture->image = $image->getClientOriginalName();
        $culture->image_show = Storage::disk('uploads')->put('culture/' . $culture->id, $image);
        $culture->save();
        }
        //Categories
        if ($request->input('categories')) :
            $culture->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.cultures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Culture $culture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Culture $culture)
    {
        return view('admin.cultures.edit', [
            'culture' => $culture,
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
    public function update(Request $request, Culture $culture)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if($image !== null) {
        $data['image'] = $image->getClientOriginalName();
        $data['image_show'] = Storage::disk('uploads')->put('culture/' . $culture->id, $image);
        }

        //Update article with given data.
        $culture->update($data);

        //Categories.
        $culture->categories()->detach();

        if ($request->input('categories')) :
            $culture->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.cultures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Culture $culture)
    {
        $culture->categories()->detach();
        $culture->delete();

        return redirect()->route('admin.cultures.index');
    }
}
