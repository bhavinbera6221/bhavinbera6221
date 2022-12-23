<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-md-10">

        </div>
    </div>

    <!-- Modal -->
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
                    <p id="msg"></p>
                    <form action="" id="userform" method="post" enctype="multipart/form-data">

                        <div class="container">
                            <div class="mb-3">
                                <input type="hidden" name="id" value="id" id="id">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" name="email"  class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" name="mobile"  class="form-control" id="mobile">
                            </div>
                            <div class="mb-3">

                                <label for="gender">Gender</label><br>
                                <input type="radio" name="gender" id="gender?male" value="male"><label for="gender?male">Male</label>
                                <input type="radio" name="gender" id="gender?female" value="female"><label for="gender?female">Female</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="save" id="save" onclick="savecategorydata()" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add User
        </button>
        <table class="table table-bordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Mobile</th>
                    <th class="col col-lg-2">Action</th>
                </tr>
            </thead>
            <tbody id="userdata"></tbody>
        </table>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        fetchData();
    });
    $(window).on("load", function() {

    });

    function fetchData() {
        $.ajax({
            url: "selectdata",
            success: function(responce) {
                data = JSON.parse(responce)
                console.log(data.Data);
                htmltabledata = ""
                count = "1"
                data.forEach(element => {
                    htmltabledata += `<tr>
                    <td>${count}</td>
                    <td>${element.name}</td>
                    <td>${element.email}</td>
                    <td>${element.mobile}</td>
                    <td>
                    <button class="btn btn-sm btn-primary" name="name" onclick="editdata(${element.id})">edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deletedata(${element.id})">delete</button>
                    </td>
                    
                    </tr>`
                    count++;
                });
                $("#userdata").html(htmltabledata)
            }

        })
    }

    function savecategorydata() {
        event.preventDefault();
        var result = {};
        $.each($('#userform').serializeArray(), function() {
            result[this.name] = this.value;
        });

        // var data = {
        //     name: $('#name').val(),
        //     email: $('#email').val(),
        //     mobile: $('#mobile').val(),
        //     gender: $('#gender').val(),
        // };

        console.log(result);
        $.ajax({
            type: "POST",
            data: result,
            url: "saveuserdata",
            success: function(responce) {
                console.log(responce);
                if (responce == 0) {
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
        // var result = {};
        // $.each($('#userform').serializeArray(), function() {
        //     result[this.name] = this.value;
        // });
        console.log(data);
        $.ajax({
            type: "POST",
            data: {
                id: id,
            },
            url: "edituserdata",
            success: function(response) {
                data = JSON.parse(response)
                $('#exampleModal').modal('show');
                $("#id").val(data.id);
                $("#name").val(data.name);
                $("#email").val(data.email);
                $("#mobile").val(data.mobile);
                $("#gender").val(data.gender);
                $("#save").attr("onclick", "updatedata(" + data.id + ")");
            }
        });
    }

    function updatedata(id) {
        var result = {};
        $.each($('#userform').serializeArray(), function() {
            result[this.name] = this.value;
        });

        // var data = {
        //     id: $('#id').val(),
        //     name: $('#name').val(),
        //     email: $('#email').val(),
        //     mobile: $('#mobile').val(),
        //     gender: $('#gender').val(),
        // };

        console.log(data);
        $.ajax({
            type: "POST",
            data: result,
            url: "updateuserdata",
            success: function(responce) {
                console.log(responce);
                if (responce == 0) {
                    $('#exampleModal').modal('hide');
                    fetchData();
                } else {
                    alert("Error while updating")
                }
            }
        })

    }

    function deletedata(id) {
        event.preventDefault();
        
        console.log(data);
        $.ajax({
            type: "POST",
            data: {id:id},
            url: "deleteuserdata",
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