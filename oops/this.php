<?php

class parent1{
    function sumoftwovalue($a,$b){
        return $a+$b;
    }
}
class partofmain extends parent1{
    function sum($x,$y){
        $sumvalue=$this->sumoftwovalue($x,$y);
        // $addition=$this->sumoftwovalue($x,$y);
        // return $addition/2;
        return $sumvalue;
        
    }
}
$objectusethiskeyword = new partofmain;
echo $objectusethiskeyword->sum(225,200);
// echo $objectusethiskeyword->(225,200);

?>