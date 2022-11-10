<?php include('header.php') ?>

<?php if (!isset($_SESSION['cartiteam'])) {
    echo "<h3>Sorry no items added</h3>";
} else {
    if (isset($_REQUEST['emptycart'])) {
        unset($_SESSION['cartiteam']);
        header("location:addtocart.php");
    }
?>
    <div class="container">
        <h3>Cart Iteam</h3>

        <ul>
            <li> <?php echo $_SESSION['cartiteam']['cart1'] ?></li>
            <li> <?php echo $_SESSION['cartiteam']['cart2'] ?></li>
            <li> <?php echo $_SESSION['cartiteam']['cart3'] ?></li>
            <li> <?php echo $_SESSION['cartiteam']['cart4'] ?></li>
            <li> <?php echo $_SESSION['cartiteam']['cart5'] ?></li>
        </ul>
        <form method="post">
            <input type="submit" name="emptycart" value="Empty cart">
        </form>
    </div>
<?php
}
?>