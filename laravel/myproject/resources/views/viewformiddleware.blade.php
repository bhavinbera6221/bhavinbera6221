@extends('layouts.appadmin')

@push('scripts')
    <script>
        function chechreq(e, spnid) {
            if (e.value == "") {
                $("#"+spnid).html("This FIeld Is Required!!");
            } else {
                $("#"+spnid).html("");
            }
        }
    </script>
@endpush
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
                {!! Form::open(['url' => 'agecheking']) !!}
                <div class="row">
                    <div class="col-md-8">

                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Product title'); !!}
                                {!! Form::text("title", "",(['class'=>'form-control',"placeholder"=>"Enter Your Title", "onblur"=>"chechreq(this,'titleerror')"])); !!}
                                <span id="titleerror"></span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Description'); !!}
                                {!! Form::textarea("description", "",(['class'=>'form-control',"placeholder"=>"Enter Description", "required"=>"required"])); !!}
                            </div>
                            <!-- @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Price'); !!}
                                {!! Form::text("price", "",(['class'=>'form-control',"placeholder"=>"Enter Your Price"])); !!}
                            </div>
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Quantity'); !!}
                                {!! Form::text("quantity", "",(['class'=>'form-control',"placeholder"=>"Enter Your Quantity"])); !!}
                            </div>
                            @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" name="btn-save" value="Add">
                            </div>
                            <!-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection