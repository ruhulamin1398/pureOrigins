<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Photo;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = banner::orderBy('id', 'desc')->get();
        return view('admin.banner.index', compact('banners'));
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
        $allbanners = banner::all();
        if (count($allbanners) >= 4) {

            $olderBanner = banner::oldest()->first();

            $olderBanner->delete();
            unlink($olderBanner->image->url);
            unlink($olderBanner->image->thumbnail);

            $banner = new banner;
            $banner->title = $request->title;
            $banner->description = $request->description;
    
            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();
    
            $picture = Photo::make($request->image)->fit(1980, 1080)->save('images/' . $fileNameFull);
            $picture = photo::make($request->image)->fit(300, 225)->save('images/' . $fileNameSmall);
    
            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();
    
            $banner->image_id = $image->id;
    
    
            $banner->save(); 
            return redirect()->back()->withSuccess(['Successfully Deleted Older Banner, and Created a New Banner']);
             
        }

        $banner = new banner;
        $banner->title = $request->title;
        $banner->description = $request->description;

        $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
        $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();

        $picture = Photo::make($request->image)->fit(1980, 1080)->save('images/' . $fileNameFull);
        $picture = photo::make($request->image)->fit(300, 225)->save('images/' . $fileNameSmall);

        $image = new image;
        $image->url = 'images/' . $fileNameFull;
        $image->thumbnail = 'images/' . $fileNameSmall;
        $image->save();

        $banner->image_id = $image->id;


        $banner->save();

        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banner $banner)
    {

        $banner = banner::find($request->id);
        $banner->title = $request->title;
        $banner->description = $request->description;

        if (!is_null($request->image)) {

            if (!is_null($banner->image)) {

                unlink($banner->image->url);
                unlink($banner->image->thumbnail);
            }

            $fileNameFull = time() . '.full.' . $request->image->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->image->getClientOriginalName();

            $picture = Photo::make($request->image)->fit(1980, 1080)->save('images/' . $fileNameFull);
            $picture = photo::make($request->image)->fit(300, 225)->save('images/' . $fileNameSmall);

            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();

            $banner->image_id = $image->id;
        }

        $banner->save();
        return redirect()->back()->withSuccess(['Successfully Created']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allbanner = banner::all();
        if (count($allbanner) == 1) {
            return Redirect::back()->withErrors(["Minimum 1 Banner Required"]);
        } else {

            $banner = $allbanner->find($id);
            $banner->delete();
            unlink($banner->image->url);
            unlink($banner->image->thumbnail);
            return Redirect::back()->withErrors(["Item Deleted"]);
        }
    }
}
