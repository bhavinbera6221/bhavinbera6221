@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            Categories </div>
                        <!-- <div class="col-md-2"><a class="btn btn-sm btn-info text-light" href="addnewproduct">Add New</a></div> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add New
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    Wel Come to Ajax View
                </div>


                <!-- Modal -->
                <form method="post">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Your Title">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <textarea name="description" id="description" class="
                                            form-control" cols="50" rows="3" placeholder="Enter Your Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" onclick="savecategorydata()" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

<script>
    function savecategorydata(params) {
        event.preventDefault();
        // console.log("called");
        $.ajax({
            url:""
            success:function(responce);
            console.log(responce);
        })
        
    }
</script>

@endpush
