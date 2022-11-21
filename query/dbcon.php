<?php
    // error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "test";

    $con = mysqli_connect($servername, $username, $password, $db);
   
    if ($con->connect_error) {
        die("connection failed" . $con->connect_error);
    }
?>