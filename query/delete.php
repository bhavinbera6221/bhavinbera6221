<?php
include 'dbcon.php';

$id = $_GET['id'];
 $deletequery = "DELETE FROM `data` WHERE id=$id";
 $query = mysqli_query($con, $deletequery);
 if ($query == 1) {
    header("location:select.php");
 }
?>