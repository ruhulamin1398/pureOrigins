<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\setting;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Photo;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = setting::find(1);
        return view('admin.setting.index',compact('setting'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setting $setting)
    {
        $setting = setting::find(1);
        $setting->name = $request->name;
        $setting->slogan = $request->slogan;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        if(!is_null($request->logo)){

            unlink($setting->image->url);
            unlink($setting->image->thumbnail);
            $setting->image->delete();
            $fileNameFull = time() . '.full.' . $request->logo->getClientOriginalName();
            $fileNameSmall = time() . '.small.' . $request->logo->getClientOriginalName();
    
            $picture = Photo::make($request->logo)->fit(295, 161)->save('images/' . $fileNameFull);
            $picture = photo::make($request->logo)->fit(295, 161)->save('images/' . $fileNameSmall);
    
            $image = new image;
            $image->url = 'images/' . $fileNameFull;
            $image->thumbnail = 'images/' . $fileNameSmall;
            $image->save();
    
            $setting->image_id = $image->id;
    
        };
        $setting->save();
        return redirect()->back()->withSuccess(['Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
