<?php

namespace App\Http\Controllers;

use App\Models\ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ajax $ajax)
    {
        return $ajax->get();
        // return view("ajaxproducts", compact("ajaxview"));
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
    public function store(Request $request, ajax $ajax)
    {
        // dd($request->all());
        $ajax->title = $request->title;
        $ajax->description = $request->description;
        $ajax->price = $request->price;
        $ajax->quantity = $request->quantity;
        $data = $ajax->save();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function show(ajax $ajax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ajax $ajax)
    {
        return $productdata = $ajax::find($request->id);
        // dd($productdata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ajax $ajax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function destroy(ajax $ajax)
    {
        //
    }
}
