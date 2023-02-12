<?php
    $f1 = 3;
    $f2 = 5;
    $n = 30;
    echo $f1;
    echo '<br/>';
    echo $f2;
    echo '<br/>';
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3."</br>"; 
    }
    
?>