<div class="w3-services py-5">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header text-left bg-dark text-light">
                        Registration
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col">
                                    <label class="md-3" for="username">User name</label>
                                    <input type="text" class="form-control" onblur="chackreq(this,'usererror')" name="username" id="username" required>
                                    <span id="usererror"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="md-3">First name</label>
                                    <input type="text" class="form-control" onblur="chackreq(this,'firsterror')" name="firstname" id="firstname" required>
                                    <span id="firsterror"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="md-3">Last name</label>
                                    <input type="text" class="form-control" onblur="chackreq(this,'lasterror')" name="lastname" id="lastname" required>
                                    <span id="lasterror"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="md-3">Email</label>
                                    <input type="email" onblur="chackreq(this,'emailerror')" class="form-control" name="email" id="email">
                                    <span id="emailerror"></span>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="md-3">Birth Date</label>
                                    <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="Enter your birthday date" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="md-3">password</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label class="md-3">profile_pic</label>
                                    <input type="file" name="profile_pic" id="profile_pic" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-info" name="save" id="save">
                                    <input type="reset" class="btn btn-danger">
                                    <a href="login" class="btn btn-success">Click here for login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('email').addEventListener("keyup", function() {

        var RegX = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if (RegX.test(this.value)) {
            document.getElementById("emailerror").innerHTML = "";
        } else {
            document.getElementById("emailerror").innerHTML = "Please enter valid email";
        }
    })


    document.getElementById('firstname').addEventListener("keyup", function() {

        var RegX = /^([a-zA-Z_\-])+$/
        if (RegX.test(this.value)) {
            document.getElementById("firsterror").innerHTML = "";
        } else {
            document.getElementById("firsterror").innerHTML = "FirstName accepted only character";
        }
    })
    document.getElementById('lastname').addEventListener("keyup", function() {

        var RegX = /^([a-zA-Z\-])+$/
        if (RegX.test(this.value)) {
            document.getElementById("lasterror").innerHTML = "";
        } else {
            document.getElementById("lasterror").innerHTML = "LastName accepted onlycharacter";
        }
    })
</script>