<?php

class parentclass{
    public function parentfunction(childclass1 $childclass1, childclass2 $childclass2)
    {
        echo "called parentclass";
        echo "<br>";
        $childclass1->childfunction1();
        echo "<br>";
        $childclass2->childfunction2();
    }
}

class childclass1{
    public function childfunction1()
    {
        echo "called childclass1";
    }
}

class childclass2{
    public function childfunction2()
    {
        echo "called childclass2";
    }
}
$childclass1 = new childclass1; 
$childclass2 = new childclass2; 
$obj = new parentclass; 
$obj->parentfunction($childclass1,$childclass2);
// echo "<br>";
// $childclass1->childfunction1();
?>