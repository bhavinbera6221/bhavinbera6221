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
                    <table class="table table-bordered">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="col col-lg-2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="DespCat"></tbody>
                    </table>
                </div>


                <!-- Modal -->
                <form method="post" id="category_form">
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
                                            <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control" id="_token">
                                            <input type="text" name="category_title" class="form-control" id="category_title" placeholder="Enter Your Title">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <textarea name="category_description" id="category_description" class="
                                            form-control" cols="50" rows="3" placeholder="Enter Your Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" id="save" onclick="savecategorydata()" class="btn btn-primary">Save changes</button>
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
    // $(document).ready(function() {

    //     alert("Document is ready");
    // });
    $(window).on("load", function() {
        fetchData();
    });

    function fetchData() {
        $.ajax({
            url: "selectallcategorydata",
            success: function(responce) {
                console.log(responce);
                htmltabledata = ""
                count = "1"
                responce.forEach(element => {
                    htmltabledata += `<tr>
                    <td>${count}</td>
                    <td>${element.category_title}</td>
                    <td>${element.category_description}</td>
                    <td>
                    <button class="btn btn-sm btn-primary" onclick="editdata(${element.category_id})">edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deletedata(${element.category_id})">delete</button>
                    </td>
                    
                    </tr>`
                    count++;
                });
                $("#DespCat").html(htmltabledata)
            }

        })

    }



    function savecategorydata() {
        event.preventDefault();
        // var serialize = $('#category_form').serialize();
        // var serializearray = $('#category_form').serializeArray();

        var result = {};
        $.each($('#category_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        console.log(result);
        $.ajax({
            type: "POST",
            dataType: "json",
            data: result,
            url: "savecategorydata",
            success: function(responce) {
                console.log(responce);
                if (responce == 1) {
                    $('#exampleModal').modal('hide');
                    fetchData();
                } else {
                    alert("Error while inserting")
                }
            }
        })

    }
    function editdata(id) {
        event.preventDefault();
        let token = $('#_token').val();
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {id:id, _token:token},
            url: "editcategorydata",
            success: function(responce) {
                $('#exampleModal').modal('show');
                $("#category_title").val(responce.category_title);
                $("#category_description").val(responce.category_description);
                $("#save").attr("onclick","updatedata("+responce.category_id+")");

            }
        })

    }
    
function updatedata(id) {
    event.preventDefault();
    // console.log("called");
    var result = {};
        $.each($('#category_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        console.log(result);
        $.ajax({
            type: "POST",
            dataType: "json",
            data: result,
            url: `updatecategorydata/${id}`,
            success: function(responce) {
                console.log(responce);
                if (responce == 1) {
                    $('#exampleModal').modal('hide');
                    fetchData();
                } else {
                    alert("Error while inserting")
                }
            }
        })
}

function deletedata(id) {
    event.preventDefault();
    var result = {};
        $.each($('#category_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        console.log(result);
        $.ajax({
            type: "POST",
            dataType: "json",
            data: result,
            url: `deletecategorydata/${id}`,
            success: function(responce) {
                console.log(responce);
                if (responce == 1) {
                    fetchData();
                } else {
                    alert("Error while deleting")
                }
            }
        })
}

</script>

@endpush