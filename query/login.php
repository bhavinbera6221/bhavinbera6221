
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="container">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="mobile">
            </div>
            <div class="mb-3">
    
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
            </div>
            <div class="mb-3">
                <label for="hobby">Hobby</label><br>
                <input type="checkbox" name="hobby[]" id="playing" value="playing"> <label for="playing">Playing</label>
                <input type="checkbox" name="hobby[]" id="reading" value="reading"> <label for="reading">Reading</label>
                <input type="checkbox" name="hobby[]" id="travelling" value="travelling"> <label for="travelling">Travelling</label>
            </div>
            <div class="input-group mb-3">
                <input type="file" name="prof_pic" class="form-control" id="prof_pic">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="select.php">
                <button type="button" name="view" class="btn btn-info">View</button>
            </a>
        </div>
    </form>
</body>
</html>
<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {
    // $name=$_POST['name'];
    // $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    // $gender=$_POST['gender'];
    // $hobby=$_POST['hobby'];
    // $prof_pic=$_POST['prof_pic'];
    $hobby = implode(",", $_POST['hobby']);
    array_pop($_POST);
    unset($_POST['hobby']);

    $tmp_name = $_FILES['prof_pic']['tmp_name'];
    $file_name = $_FILES['prof_pic']['name'];
    move_uploaded_file($tmp_name, "upload/$file_name");

    $insert = "INSERT INTO data(`name`,`email`,`mobile`,`gender`,`hobby`,`prof_pic`) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[gender]','$hobby','$file_name')";
    $query = mysqli_query($con,$insert );
}


?>