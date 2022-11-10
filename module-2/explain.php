<?php
$a="1";
$b=&$a;
$b="2$b";

echo $b;
echo "<br>";
echo  "a is a variable type of string with the value '1'<br>";
echo  " b is the reference of the a variable.<br>";
echo  "b & a have for value the string '2' concatenate with the value of the variable a (string '1')<br>";


?>