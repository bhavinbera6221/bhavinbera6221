<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
</body>
</html>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<style>
    input[type="radio"],
    input[type="checkbox"] {
        -webkit-appearance: auto !important;
        outline: auto !important;
    }
</style>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6 offset-lg-3">

            <div class="card">
                <div class="card-header text-center">
                    Registration
                </div>
                <div class="card-body">
                    <form  method="post" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col">
                                <label for="fullname">FullName</label>
                                <input type="text" onblur="checkreq(this,'nameerror')" placeholder="Enter Full Name" class="form-control" name="fullname" id="fullname">
                                <span id="nameerror"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="username">UserName</label>
                                <input type="text"  onblur="checkreq(this,'usererror')" placeholder="Enter User Name" class="form-control" name="username" id="username">
                                <span id="usererror"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="email">Email</label>
                                <input type="text" onblur="checkreq(this,'emailerror')" placeholder="Enter Email Address" class="form-control" name="email" id="email">
                                <span id="emailerror"></span>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="mobile">Mobile</label>
                                <input type="number" onblur="checkreq(this,'mobileerror')" placeholder="Enter Contact Number" class="form-control" name="mobile" id="mobile">
                                <span id="mobileerror"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="gender">Gender</label>
                            <div class="col">
                                <input type="radio"  name="gender" value="Male" id="male">  <label for="male"> Male  </label>
                                <input type="radio" name="gender" value="Female" id="female">  <label for="female"> Female</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <div class="col">
                            <label for="hobby" >Hobby</label>
                            <div class="col">
                                <input type="checkbox" name="hobby[]" value="cricket" id="cricket"> <label for="cricket"> Cricket</label>
                                <input type="checkbox" name="hobby[]" value="reading" id="reading"> <label for="reading"> Reading</label>
                                <input type="checkbox" name="hobby[]" value="swiming" id="swiming"> <label for="swiming"> Swiming</label>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <label for="city"  onblur="checkreq(this,'cityerror')">Select City</label>
                            <div class="col">
                                <select name="city" id="city" class="form-control">
                                    <option value="1" disabled selected>--------- select your City ---------</option>
                                    <option value="ahmedabad">ahmedabad</option>
                                    <option value="jamnagar">jamnagar</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Junagadh">Junagadh</option>
                                    <option value="Rajkot">Rajkot</option>
                                    <option value="vadodara">vadodara</option>
                                </select>
                            </div>
                            <span id="cityerror"></span>
                        </div>

                        <div class="row mt-3">
                        <label for="prof_pic">Prof_pic</label>
                            <div class="col">
                                <input type="file"  onblur="checkreq(this,'picrerror')" name="prof_pic" id="prof_pic">
                                <span id="picerror"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="password">Password</label>
                            <div class="col">
                                <input type="password" onblur="checkreq(this,'passerror')" placeholder="Enter your password" class="form-control" name="password" id="password">
                                <span id="passerror"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" name="regisration" id="regisration" value="register">

                                <input type="reset" class="btn btn-success">
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

    document.getElementById('email').addEventListener("keyup",function(){
        var RegX = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        if (RegX.test(this.value)) {           
            console.log("inside if");
            document.getElementById("emailerror").innerHTML = ""
        } else {
            console.log("inside else");
            document.getElementById("emailerror").innerHTML = "Invalid Number!!"
        }
    })
    
    document.getElementById('mobile').addEventListener("keyup",function(){
        var RegX = /^([0-9]{10})$/;
        if (RegX.test(this.value)) {
            console.log("inside if");
            document.getElementById("mobileerror").innerHTML = ""
        } else {
            console.log("inside else");
            document.getElementById("mobileerror").innerHTML = "Invalid formate"
        }
    })

    function checkreq(e,spn) {
        if (e.value == "") {
            document.getElementById(spn).innerHTML = "This field required!!!"
        }else{
            document.getElementById(spn).innerHTML = ""
            console.log("Done");
        }
        
    }
</script>