@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="http://localhost:8000/saveeditproduct/{{$productdata->id}}" method="post">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                Edit Product
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row-mt-3">
                            <div class="col-md-6">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{ $productdata->title}}" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="row-mt-3">
                            <div class="col-md-6">
                                <label for="description">Description</label>
                                <input type="text" value="{{ $productdata->description}}" name="description" class="form-control" id="description">
                            </div>
                        </div>
                        <div class="row-mt-3">
                            <div class="col-md-6">
                                <label for="price">Price</label>
                                <input type="text" name="price" value="{{ $productdata->price}}" class="form-control" id="price">
                            </div>
                        </div>
                        <div class="row-mt-3 mb-3">
                            <div class="col-md-6">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" value="{{ $productdata->quantity}}" class="form-control" id="quantity">
                            </div>
                        </div>
                        <div class="row-mt-5">
                            <div class="col-md-6">
                                <input type="submit" value="Add" name="btn_add" class="btn btn-primary" id="btn_add">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection