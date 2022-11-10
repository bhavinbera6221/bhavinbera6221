<?php
// include('header.php');
//echo "<pre>";
// echo "hello";
// print_r($_SESSION);
?>
<?php
if (isset($_SESSION['UserName'])) {
?>
    <h3 class="text-center mt-4 mb-4"> Hello <?php echo $_SESSION['UserName'] ?></h3>
<?php
} else {
    echo "<h3>Please Login from account</h3>";
}
// header("location:home.php");
?>
<div class="text-center">

    <a href="login.php">
        <input type="reset" class="btn btn-danger" value="logout">
    </a>
</div>
</body>

</html>