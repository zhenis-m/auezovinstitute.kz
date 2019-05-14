<?php

namespace App\Http\Controllers\Admin;

use App\Inst;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InstController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.insts.index', [
            'insts' => Inst::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insts.create', [
            'inst' => [],
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
        $inst = Inst::create($request->all());
        //Upload image and store image path in the image_show attribute.
        if($image !== null) {
        $inst->image = $image->getClientOriginalName();
        $inst->image_show = Storage::disk('uploads')->put('inst/' . $inst->id, $image);
        $inst->save();
        }
        //Categories
        if ($request->input('categories')) :
            $inst->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.insts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Inst $inst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Inst $inst)
    {
        return view('admin.insts.edit', [
            'inst' => $inst,
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
    public function update(Request $request, Inst $inst)
    {
        //TODO: перенести ответственность на мутатор в Request
        $data = $request->except('slug');

        //Grab the image from request.
        $image = $request->file('image');

        //Store image & put image path & image name in the dataset.
        if($image !== null) {
        $data['image'] = $image->getClientOriginalName();
        $data['image_show'] = Storage::disk('uploads')->put('inst/' . $inst->id, $image);
        }

        //Update article with given data.
        $inst->update($data);

        //Categories.
        $inst->categories()->detach();

        if ($request->input('categories')) :
            $inst->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.insts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inst $inst)
    {
        $inst->categories()->detach();
        $inst->delete();

        return redirect()->route('admin.insts.index');
    }
}
