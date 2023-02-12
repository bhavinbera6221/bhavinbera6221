@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            All Product
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add New
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Sr.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th class="col col-lg-2">Action</th>
                            </tr>
                        </thead>
                        <tbody id=desp></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<form method="post" id="product_form">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row-mt-3">
                        <div class="">
                            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" />
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col-md">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="row-mt-3">
                        <div class="col-md">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control" id="price">
                        </div>
                    </div>
                    <div class="row-mt-3 mb-3">
                        <div class="col-md">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" id="quantity">
                        </div>
                    </div>
                    <div class="row-mt-5">
                        <div class="col-md">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" onclick="savedata()" value="Add" name="btn_add" class="btn btn-primary" id="btn_add">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@push('scripts')
<script>
    $(window).on("load", function(e) {
        fetchData()
    });

    function resetMyForm() {
        $('input').val('');
        $('#product_form').val(0);
    }

    // $(document).ready(function() {
    //     alert("ready!");
    // });

    function fetchData() {
        $.ajax({
            url: "ajaxselect",
            success: function(response) {
                console.log(response);
                htmltabledata = ""
                count = 1
                response.forEach(element => {
                    htmltabledata += `<tr>
                    <td>${count}</td>
                    <td>${element.title}</td>
                    <td>${element.description}</td>
                    <td>${element.price}</td>
                    <td>${element.quantity}</td>
                    <td>
                    <button class="btn btn-sm btn-primary" onclick="editdata(${element.id})">edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deletedata(${element.id})">delete</button>
                    </td>
                    </tr>`
                    count++;
                });
                $("#desp").html(htmltabledata);
            }
        })
    }


    function savedata() {
        event.preventDefault();

        var result = {};
        $.each($('#product_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        console.log(result);
        $.ajax({
            type: "POST",
            data: result,
            url: "saveajax",
            success: function(response) {
                console.log(response);
                if (response == 1) {
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
            type: "post",
            data: {
                id: id,
                _token: token
            },
            url: "editdata",
            success: function(response) {
                // console.log(response);
                $('#exampleModal').modal('show');
                $("#title").val(response.title);
                $("#description").val(response.description);
                $("#price").val(response.price);
                $("#quantity").val(response.quantity);
                $("#btn_add").attr("onclick", "updatedata(" + response.id + ")");
            }
        })
    }

    function updatedata(id) {
        event.preventDefault();

        var result = {};
        $.each($('#product_form').serializeArray(), function() {
            result[this.name] = this.value;
        });

        console.log(result);
        $.ajax({
            type: "POST",
            data: result,
            url: `/updateajaxdata/${id}`,
            success: function(response) {
                console.log(response);
                if (response == 1) {
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
        $.each($('#product_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        console.log(result);
        $.ajax({
            type: "POST",
            data: result,
            url: `deleteajaxdata/${id}`,
            success: function(response) {
                if (response == 1) {
                    fetchData();
                } else {
                    alert("Error while inserting")
                }
            }
        })
    }
</script>
@endpush