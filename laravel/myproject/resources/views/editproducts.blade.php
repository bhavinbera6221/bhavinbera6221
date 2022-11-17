@extends('layouts.appadmin')

@section('content')
<div class="row">

    <!-- Area Chart -->
    <!-- Card Header - Dropdown -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!-- <form action="storeproduct" method="post"> -->
                {!! Form::open(['url' => 'saveeditedproduct/'.$productData->id]) !!}
                <div class="row">
                    <div class="col-md-8">

                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Product title'); !!}
                                {!! Form::text("title","$productData->title",(['class'=>'form-control',"placeholder"=>"Enter Your Title"])); !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Description'); !!}
                                {!! Form::textarea("description","$productData->description",(['class'=>'form-control',"placeholder"=>"Enter Description",])); !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Price'); !!}
                                {!! Form::text("price","$productData->price",(['class'=>'form-control',"placeholder"=>"Enter Your Price"])); !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Quantity'); !!}
                                {!! Form::text("quantity","$productData->quantity",(['class'=>'form-control',"placeholder"=>"Enter Your Quantity"])); !!}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" name="btn-save" value="Add">
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection