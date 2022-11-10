<?php include('header.php'); 

if (isset($_POST['regist'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // exit;

    if ($_POST['username'] !== '' && $_POST['email'] !== '' && $_POST['phone'] !== '' && $_POST['password'] !== '') {
        setcookie("username", $_POST['username'], 3600 + time());
        setcookie("email", $_POST['email'], 3600 + time());
        setcookie("phone", $_POST['phone'], 3600 + time());
        setcookie("pass", $_POST['password'], 3600 + time());
        header("location:login.php");
    }
}   
   
?>

<div class="container  mt-5">
    <div class="row">
        <div class="col-mb-4 offset-md-4 text-center">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem">
                <div class="card-header">
                    <h4>Registration</h4>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mt-3">
                            <input type="text" placeholder="Enter username" name="username" id="username" class="form-control" required>
                        </div>
                        
                        <div class="mt-3">
                            <input type="email"  placeholder="Enter e-mail address" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mt-3">
                            <input type="number"  placeholder="Enter contact number" name="phone" id="phone" class="form-control" maxlength="10" required>
                        </div>
                        
                        <div class="mt-3">
                            <input type="password" placeholder="Enter Password " name="password" id="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted" >Select File</label>
                            <input type="file" class="form-control" name="profile_pic" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary ms-auto" name="regist" value="Registration">
                                register
                            </button>
                            <button type="reset" class="btn btn-danger ms-auto" name="reset" value="reset">
                                Reset
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</body>

</html>