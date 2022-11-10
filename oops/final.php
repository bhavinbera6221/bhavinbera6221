<?php


 final class finalkey{
     final public function FunctionName()
    {
        return "final keyword testing.";
    }
}
class childfinal{
    public function FunctionName1(){
        return "child class called.";
    }
}
$object = new childfinal;
$obj = new finalkey;

// $obj = new finalkey;
// echo $obj->FunctionName();
echo "<br>";
echo $object->FunctionName1();
echo "<br>";
echo $obj->FunctionName();

?>