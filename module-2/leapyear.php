<?php

$year = 2001;
  if ($year % 400 == 0) {
     echo $year." is a leap year.";
   } elseif ($year % 100 == 0) {
      echo $year." is not a leap year.";
   } elseif ($year % 4 == 0) {
     echo $year." is a leap year.";
   } else {
     echo $year." is not a leap year.";
  }
?>