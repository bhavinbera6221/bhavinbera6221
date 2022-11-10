<?php include('header.php');

if (isset($_POST['username'])) {
    // | $_POST['phone'] == $_COOKIE['phone'] && $_POST['password'] == $_COOKIE['pass']f 
    if (($_POST['username'] == $_COOKIE['username'] || $_POST['username'] == $_COOKIE['email'] || $_POST['username'] == $_COOKIE['phone']) && $_POST['password'] == $_COOKIE['pass']) {
        // ECHO "inside if";
        $_SESSION['UserName'] = $_POST['username'];
        $_SESSION['Email'] = $_POST['email'];
        $_SESSION['Phone'] = $_POST['phone'];
        $_SESSION['UserData'] = $_POST['password'];
        header("location:home.php");

    } else {
        echo "Invalid user";
    }
}

?>

<div class="container  mt-5">
    <div class="row">
        <div class="col-mb-4 offset-md-4 text-center">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem">
                <div class="card-header">
                    <h4>Login Page</h4>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mt-3"> 
                            <input type="text" placeholder="Enter username" name="username" id="username" class="form-control">
                        </div>

                        <div class="mt-3">
                            <input type="password" placeholder="Enter Password " name="password" id="password" class="form-control">
                        </div>

                        <div class="mt-3">
                            <input type="submit" name="btn-login" class="btn btn-primary" value="Login">
                            <input type="reset" class="btn btn-danger" value="Reset">
                        </div>
                    </form>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Don't have an account? <a href="registration.php" class="text-dark">Create One</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</body>

</html>