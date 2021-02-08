<?php

namespace App\Http\Controllers;

use App\Models\craft;
use Illuminate\Http\Request;

class CraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('craft');
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
     * @param  \App\Models\craft  $craft
     * @return \Illuminate\Http\Response
     */
    public function show(craft $craft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\craft  $craft
     * @return \Illuminate\Http\Response
     */
    public function edit(craft $craft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\craft  $craft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, craft $craft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\craft  $craft
     * @return \Illuminate\Http\Response
     */
    public function destroy(craft $craft)
    {
        //
    }
}
