<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(product $product)
    {
        // dd($product->all());
        $productdata = $product->all();
        return view("showallproducts", compact('productdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categorydata = ['called'];
        // dd($categorydata);
        return view("addproducts");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, product $product)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:10000',
            'quantity' => 'required|max:1000'
        ]);
        // dd($validated);

        foreach ($validated as $key => $value) {
            $product->$key = $value;
        }
        // dd($product);
        $product->save();
        return redirect("allproducts");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($prodid, product $product)
    {
        $productdata = $product::find($prodid);
        // dd($product);
        return view("editproduct", compact("productdata"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($prodid, Request $request, product $product)
    {
        $productData = $product::find($prodid);
        $Data = $request->except("_token", "btn_add");
        foreach ($Data as $key => $value) {
                $productData->$key = $value;
        }
        $productData->save();
        return redirect("allproducts");
        // $productData = $product::find($prodid);
        // dd($request->$productData);
        // dd($productData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($prodid, product $product)
    {
        $productfind = $product::find($prodid);
        $productfind->delete();
        return redirect("allproducts");
    }
}
