<?php

namespace App\Http\Controllers\Admin;

use App\SecondScience;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SecondScienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.seconds.index', [
            'seconds' => SecondScience::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seconds.create', [
            'second' => [],
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
        $second = SecondScience::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if ($image !== null) {
            $second->image = $image->getClientOriginalName();
            $second->image_show = Storage::disk('uploads')->put('second_sciences/' . $second->id, $image);
            $second->save();
        }
        //Categories
        if ($request->input('categories')) :
            $second->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.seconds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(SecondScience $second)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(SecondScience $second)
    {
        return view('admin.seconds.edit', [
            'second' => $second,
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
    public function update(Request $request, SecondScience $second)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if ($image !== null) {
            $data['image'] = $image->getClientOriginalName();
            $data['image_show'] = Storage::disk('uploads')->put('second_sciences/' . $second->id, $image);
        }

        //Update article with given data.
        $second->update($data);

        //Categories.
        $second->categories()->detach();

        if ($request->input('categories')) :
            $second->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.seconds.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondScience $second)
    {
        $second->categories()->detach();
        $second->delete();

        return redirect()->route('admin.seconds.index');
    }
}
