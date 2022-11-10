<?php

use realme as GlobalRealme;
use vivo as GlobalVivo;

class mobile
{
    function mobilefunction()
    {
        return "this is all phone series.";
    }
}  


class realme extends mobile
{
    function realmefunction()
    {
        return "realme series";
    }
}


class samsung extends realme
{
    function samsungfunction()
    {
        return "samsung series";
    }
}
class vivo extends samsung
{
    function vivofunction()
    {
        return "vivo series";
    }
}
class iphone extends Vivo
{
    function iphonefunction()
    {
        return "iphone series";
    }
}

class nothing extends iphone
{
    function nothingfunction()
    {
        return "nothing new series start";
    }
}

$phone = new nothing;
echo  $phone->mobilefunction()."<br>";
echo  $phone->realmefunction()."<br>";
echo  $phone->samsungfunction()."<br>";
echo  $phone->vivofunction()."<br>";
echo  $phone->iphonefunction()."<br>";
echo  $phone->nothingfunction()."<br>";
