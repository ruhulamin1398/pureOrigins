<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\galleryCategory;
use App\Models\image;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Photo;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = galleryCategory::all();
        return view('admin.gallery.index',compact('categories'));
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
        $gallery = new gallery;
        $gallery->gallery_category_id = $request->gallery_category_id;



            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();

            $picture = Photo::make($request->image)->fit(650, 450)->save('images/' . $fileNameFull);
            $picture = photo::make($request->image)->fit(300, 225)->save('images/' . $fileNameSmall);

            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();

            $gallery->image_id = $image->id;


        $gallery->save();
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
