<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>PHP Program to Find Largest of Three Numbers</h3>
       <form action="" method="post">
       Number 1: <input type="number" name="first" min="0" value="<?=(isset($_POST['first']))?$_POST['first']:'';?>" /><br /><br />
       Number 2: <input type="number" name="second" min="0" value="<?=(isset($_POST['second']))?$_POST['second']:'';?>" /><br /><br />
       Number 3: <input type="number" name="third" min="0" value="<?=(isset($_POST['third']))?$_POST['third']:'';?>" /><br /><br />
       <input type="submit"/><br /><br />
      </form>
</body>
</html>
<?php 
 
if($_POST){
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    
    //find the largest number between first and second and store it in a $temp variable 
    $temp = ($first > $second) ? $first : $second;
 
    //Now compare the $temp & $third variable to find the largest number of 3
    $largest = ($third > $temp) ? $third : $temp;
 
    print "<h2>Largest of three number is: ".$largest."</h2>";
}
 
?>