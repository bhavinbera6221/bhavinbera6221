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
        <?php
        include 'dbcon.php';

        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $db = "test";

        // $con = mysqli_connect($servername, $username, $password, $db);

        // if ($con->connect_error) {
        //     die("connection failed" . $con->connect_error);
        // }

        $id = $_GET['id'];
        $select = "SELECT * FROM `data` WHERE id=$id";
        $query = mysqli_query($con, $select);

        $result = mysqli_fetch_assoc($query);
        // print_r($result);
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $gender = $_POST['gender'];
            // $hobby=$_POST['hobby'];
            $prof_pic = $_POST['prof_pic'];
            $hobby = implode(",", $_POST['hobby']);
            array_pop($_POST);
            unset($_POST['hobby']);


            $tmp_name = $_FILES['prof_pic']['tmp_name'];
            $file_name = $_FILES['prof_pic']['name'];
            move_uploaded_file($tmp_name, "upload/$file_name");

            $update = "UPDATE `data` SET `name`='$name',`email`='$email',`mobile`='$mobile',`gender`='$gender',`hobby`='$hobby',`prof_pic`='$file_name' WHERE id=$id";
            // $update = " UPDATE `data` SET name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]', gender='$_POST[gender]', hobby='$_POST[hobby]', prof_pic='$_POST[prof_pic]' WHERE id=$id";

            $updatequery = mysqli_query($con, $update);

            if ($updatequery) {
        ?>
                <script>
                    alert("Updated Succesfully!!");
                </script>

            <?php
                header("location:select.php");
            } else {
            ?>
                <script>
                    alert("Not update");
                </script>
        <?php
            }
        }
        ?>
        <div class="container">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo $result['name']; ?>" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text" name="email" value="<?php echo $result['email']; ?>" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" value="<?php echo $result['mobile']; ?>" class="form-control" id="mobile">
            </div>
            <div class="mb-3">

                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" <?php if ($result['gender'] == "male") {
                                                        echo "checked";
                                                    } ?> id="male" value="male"><label for="male">Male</label>
                <input type="radio" name="gender" <?php if ($result['gender'] == "female") {
                                                        echo "checked";
                                                    } ?> id="female" value="female"><label for="female">Female</label>
            </div>
            <?php
            $hobbyarray = explode(",", $result['hobby']);
            ?>
            <div class="mb-3">
                <label for="hobby">Hobby</label><br>
                <input type="checkbox" name="hobby[]" <?php if (in_array("playing", $hobbyarray)) {
                                                            echo "checked";
                                                        } ?> id="playing" value="playing"> <label for="playing">Playing</label>
                <input type="checkbox" name="hobby[]" <?php if (in_array("reading", $hobbyarray)) {
                                                            echo "checked";
                                                        } ?>  id="reading" value="reading"> <label for="reading">Reading</label>
                <input type="checkbox" name="hobby[]" <?php if (in_array("travelling", $hobbyarray)) {
                                                            echo "checked";
                                                        } ?> id="travelling" value="travelling"> <label for="travelling">Travelling</label>
            </div>
            <div class="input-group mb-3">
                <label for="prof_pic" class="form-label">Prof_pic
                    <input type="file" name="prof_pic" <?php $result['prof_pic']; ?> class="form-control" id="prof_pic">
                    <input type="text" name="prof_pic" value="<?php echo $result['prof_pic']; ?>" class="form-control" id="prof_pic">
                </label>
            </div>

            <button type="submit" name="update" value="update" id="
            update" class="btn btn-primary">Update</button>
            <a href="select.php">
            </a>
        </div>
        <?php
        // echo $result['gender'];
        ?>
    </form>
</body>

</html>