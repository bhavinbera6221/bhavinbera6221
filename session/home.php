<?php
include('header.php');
?>
<h2>Home page</h2>
<?php
if (isset($_SESSION['UserName'])) {
?>
    <h3 class="text-center mt-4 mb-4"> Hello <?php echo $_SESSION['UserName'] ?></h3>
<?php
} else {
    echo "<h3>Please Login from account</h3>";
}
?>
  
</body>

</html>