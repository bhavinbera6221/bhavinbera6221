<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categaries;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(categaries $category)
    {
        return $category->get();    
        // dd($allcategories);
        // return "something";
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
    public function store(Request $request, categaries $category)
    {
        // dd($request->all());;
        // dd($request->category_description);
        $category->category_title = $request->category_title;
        $category->category_description = $request->category_description;
        $data = $category->save();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @ret;urn \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, categaries $category)
    {
        return $categoryByTd = $category::find($request->id);
        // dd($categoryByTd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categaries $category, $id)
    {
        // dd($request->id);
        $categoryById = $category::find($request->id);
        $categoryById->category_title = $request->category_title;
        $categoryById->category_description = $request->category_description;
        $data = $categoryById->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(categaries $category, $id)
    {
        $categoryById = $category::find($id);
        $data = $categoryById->delete();
        return $data;
    }
}
