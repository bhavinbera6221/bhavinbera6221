<form method="post">
    Enter Number to find day<br /><input class="inputVal" type="text" name="input" value="<?php echo (isset($_POST['input']) ? $_POST['input'] : ''); ?>"><br><br>
    <input id="subBtn" type="submit" name="submit" value="Submit">
</form>
</div>
<?php
if (isset($_POST['input']) && $_POST['input'] != '' && $_POST['input'] < '8') {
    $day = $_POST['input'];
    switch ($day) {
        case 1:
            echo "Its a Monday!<br>";
            break;
        case 2:
            echo "Its a Tuesday!<br>";
            break;
        case 3:
            echo "Its a Wednesday!<br>";
            break;
        case 4:
            echo "Its a Thursday!<br>";
            break;
        case 5:
            echo "Its a Friday!<br>";
            break;
        case 6:
            echo "Its a Saturday!<br>";
            break;
        case 7:
            echo "Its a Sunday!!<br>";
            echo "Its a Holiday!!<br>";
            break;
    }
}
