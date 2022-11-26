@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="form-group">
            <label for="bank_name">Bank Name</label>
            {{ Form::selectBank("bank_name", $merchant['paymentInfo']->bank_name ?? null,["class"=>"form-control"]) }}
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            All Product
                        </div>
                        <div class="col-md-2"><a class="btn btn-sm btn-info text-light" href="addnewproduct">Add New</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Sr</th>
                                <th>Title</th>
                                <th>Descrition</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                                <!-- <th class="col col-lg-4">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sr = "1"; ?>
                            @foreach($ProductsData as $data)
                            <tr>
                                <td class="bg-dark text-light">{{ $sr }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>
                                    <a href="editprod/{{ $data->id }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="deleteprod/{{ $data->id }}" class="btn btn-sm btn-danger">Delete</a>
                                    <a href="viewproduct/{{ $data->id }}" class="btn btn-sm btn-success">Download</a>
                                </td>
                            </tr>
                            <?php
                            $sr++;
                            ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection