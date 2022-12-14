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
                {!! Form::open(['url' => 'sendmailtest']) !!}
                <div class="row">
                    <div class="col-md-8">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Sent To'); !!}
                                {!! Form::text("to","",(['class'=>'form-control',"placeholder"=>"email@mail.com"])); !!}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                {!! Form::label('Subject'); !!}
                                {!! Form::textarea("subject","",(['class'=>'form-control',"placeholder"=>"Enter Mail Subject",])); !!}
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