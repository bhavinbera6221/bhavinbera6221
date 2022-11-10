<?php

class magicmethod
{

    public function __get($val)
    {
        return $val;
    }
    public function __set($key, $val)
    {
        echo "key is " . $key . " and value is " . $val . "<br>";
    }
    public function __call($func, $val)
    {
        echo "<br> key is " . $func;
        echo "<pre>";
        print_r($val);
    }
}

$name = new magicmethod;
echo $name->bhavin . "&nbsp";
echo "<br>";
echo $name->ahir;
echo "<br>";
$name->username = "bhavin";
echo "<br>";
echo $name->jamnagar;
echo "<br>";
$name->username = "jamnagar  ";
echo "<br>";
$name->create("23", "52", "58", "85");
echo "<br>";
$name->select("jamnagar", "rajkot", "junagadh", "ahmedabad");


?>