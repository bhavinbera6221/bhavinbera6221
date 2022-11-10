<?php
// $year = 2019;
for ($year=1901; $year<=2023; $year++) { 
    
    if ($year % 400 == 0) {
        echo $year." is a leap year.<br>";
    } elseif ($year % 100 == 0) {
        echo $year." is not a leap year.<br>";
    } elseif ($year % 4 == 0) {
        echo $year." is a leap year.<br>";
    } else {
        echo $year." is not a leap year.<br>";
    }
}
?>                          