<?php

namespace App\Http\Controllers;

use App\Models\serviceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.category');
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
     * @param  \App\Models\serviceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(serviceCategory $serviceCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serviceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceCategory $serviceCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serviceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviceCategory $serviceCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serviceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceCategory $serviceCategory)
    {
        //
    }
}
