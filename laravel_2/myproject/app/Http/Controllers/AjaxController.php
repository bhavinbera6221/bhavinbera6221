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
        // dd($ajax::find($request->id));
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
    public function update(Request $request, $id, ajax $ajax)
    {
        // dd($request::find($request->id));
        $ajaxproduct = $ajax::find($request->id);
        // $ajaxproduct = $ajax::find($ajax->$id);
        $ajaxproduct->title = $request->title;
        $ajaxproduct->description = $request->description;
        $ajaxproduct->price = $request->price;
        $ajaxproduct->quantity = $request->quantity;
        $data = $ajaxproduct->save();
        // foreach ($ajaxproduct as $key => $value) {
        //     $ajax->$key = $value;
        // }
        //  $data = $ajax->save();
         return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function destroy(ajax $ajax, $id)
    {
        // dd($ajax->$id);
        $ajaxdata = $ajax::find($id);
        $data = $ajaxdata->delete();
        return $data;
    }
}
