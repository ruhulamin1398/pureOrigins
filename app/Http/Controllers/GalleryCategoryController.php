<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\galleryCategory;
use App\Models\image;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $categories = galleryCategory::all();
        return view('admin.gallery.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new galleryCategory;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->withSuccess('Category Saved Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(galleryCategory $galleryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(galleryCategory $galleryCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galleryCategory $galleryCategory)
    {
        $category = galleryCategory::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->withSuccess('Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(galleryCategory $galleryCategory,$id)
    {

        $category = galleryCategory::find($id);
        foreach($category->gallery as $gallery){
            unlink($gallery->image->url);
            unlink($gallery->image->thumbnail);
            $gallery->image->delete();
            $gallery->delete();
        }
        $category->delete();
        return redirect()->back()->withErrors('Category Deleted');

    }
}
