@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                                Product
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Title</th>
                                <th>Descrition</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th class="col col-lg-1">Action</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <tr>
                                <td>{{ $productData->title }}</td>
                                <td>{{ $productData->description }}</td>
                                <td>{{ $productData->price }}</td>
                                <td>{{ $productData->quantity }}</td>
                                <td>
                                    <a href="delete" class="btn btn-sm btn-danger">Download</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection