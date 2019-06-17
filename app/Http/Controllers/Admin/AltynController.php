<?php

namespace App\Http\Controllers\Admin;

use App\Altyn;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AltynController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.altyns.index', [
            'altyns' => Altyn::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.altyns.create', [
            'altyns' => [],
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
        $altyn = Altyn::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $altyn->image = $image->getClientOriginalName();
            $altyn->image_show = Storage::disk('uploads')->put('altyn/' . $altyn->id, $image);
            $altyn->save();
        }
        //Categories
        if ($request->input('categories')) :
            $altyn->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.altyns.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Altyn $altyn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Altyn $altyn)
    {
        return view('admin.altyns.edit', [
            'altyn' => $altyn,
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
    public function update(Request $request, Altyn $altyn)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('altyn/' . $altyn->id, $image);
        }

        //Update article with given data.
        $altyn->update($data);

        //Categories.
        $altyn->categories()->detach();

        if ($request->input('categories')) :
            $altyn->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.altyns.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Altyn $altyn)
    {
        $altyn->categories()->detach();
        $altyn->delete();

        return redirect()->route('admin.altyns.index');
    }
}
