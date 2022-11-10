<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $dbconnection = mysqli_connect($servername, $username, $password, $dbname);

    if ($dbconnection->connect_error) {
        die("connection failed" . $dbconnection->connect_error);
    }
    
    if (isset($_REQUEST['submit'])) {
        $hobby = implode(",", $_POST['hobby']);
        array_pop($_POST);
        unset($_POST['hobby']);
    
        $tmp_name = $_FILES['prof_pic']['tmp_name'];
        $file_name = $_FILES['prof_pic']['name'];
        move_uploaded_file($tmp_name, "test/$file_name");

        $insert = mysqli_query($dbconnection, "INSERT INTO data(`name`,`email`,`mobile`,`gender`,`hobby`,`prof_pic`) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[gender]','$hobby','$file_name')");
    }
    if (isset($_POST['delete'])) {
        $delete = mysqli_query($dbconnection, "DELETE FROM `data` WHERE `name`='$_POST[name]' OR `email`='$_POST[email]' OR `mobile`='$_POST[mobile]'");
    }
    if (isset($_POST['update'])) {
        $hobby = implode(",", $_POST['hobby']);
        array_pop($_POST);
        unset($_POST['hobby']);

        $tmp_name = $_FILES['prof_pic']['tmp_name'];
        $file_name = $_FILES['prof_pic']['name'];
        move_uploaded_file($tmp_name, "test/$file_name");
        
        $update= "UPDATE `data` SET `name`='$_POST[name]',`email`='$_POST[email]',`mobile`='$_POST[mobile]',`gender`='$_POST[gender]',`hobby`='$hobby',`prof_pic`='$file_name' WHERE `name`='$_POST[name]'";
        $result= mysqli_query($dbconnection,$update);
    }

    ?>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hobby">Hobby</label>
                <input type="checkbox" name="hobby[]" id="playing" value="playing"> <label for="playing">Playing</label>
                <input type="checkbox" name="hobby[]" id="reading" value="reading"> <label for="reading">Reading</label>
                <input type="checkbox" name="hobby[]" id="travelling" value="travelling"> <label for="travelling">Travelling</label>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label for="prof_pic">Prof_pic</label>
                <input type="file" name="prof_pic" id="prof_pic">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" name="submit" value="Submit">
                <input type="submit" name="delete" value="Delete">
                <input type="submit" name="update" value="update">
            </div>
        </div>
        <div class="row">
            <div class="col">
            </div>
        </div>

    </form>
</body>

</html>
<?php

?>