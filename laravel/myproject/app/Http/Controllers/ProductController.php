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
        // dd("inside controller");
        // dd($product->get()); 
        $ProductsData = $product->get();

        return view("showallproducts", compact('ProductsData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategoriesData = ['something'];
        return view("addnewproducts", compact('CategoriesData'));
        // dd("testing");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, product $product)
    {
        // dd($request->all());
        // $product->title=$request->title;
        // $product->description=$request->description;
        // $product->price=$request->price;
        // $product->quantity=$request->quantity;
        $data = $request->except('btn-save', '_token');
        // dd($data);
        foreach ($data as $key => $value) {
            $product->$key = $value;
        }
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
        $productData = $product::find($prodid);
        return view("editproducts", compact('productData'));
        // dd($product);

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
        // dd($request->all());
        $data = $request->except('btn-save', '_token');
        foreach ($data as $key => $value) {
            $productData->$key = $value;
        }
        $productData->save();
        return redirect("allproducts");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($prodid, product $product)
    {
        // dd($prodid);
        // $res=$product::where('id',$prodid)->delete();
        $product = $product::find($prodid);
        $product->delete();
        return redirect("allproducts");
    }
}
