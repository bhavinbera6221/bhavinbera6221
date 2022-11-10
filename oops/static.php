<?php

class MethodOverloading{
    public static $PublicData = "something";
    public static function FunctionName(){
        self::$PublicData;
        echo " static called";
    }
}
class child extends MethodOverloading{
    public function FunctionName1(){
        echo "child called<br>";
        echo self::$PublicData;
    }
}
$obj = new child;
// // $object = new MethodOverloading;

echo $obj->functionName1();
echo "<br>";
echo $obj->functionName();
echo "<br>";
// echo "====================================<br>";
// $obj = new MethodOverloading;
// echo $obj->functionName();
// echo "<br>";
// echo MethodOverloading::$PublicData;
// // echo "<br>";
// echo MethodOverloading::functionName();
echo "<br>";

?>