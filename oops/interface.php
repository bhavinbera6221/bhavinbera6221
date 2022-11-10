<?php

interface samsung
{
    function samsungfunction();
}


interface realme
{
    function realmefunction();
}

interface vivo
{
    function vivofunction();
}

class mobile implements samsung, realme, vivo
{
    function mobilefunction()
    {
        return "all mobile series series";
    }
    function realmefunction()
    {
        return "realme series";
    }
    function samsungfunction()
    {
        return "samsung series";
    }
    function vivofunction()
    {
        return "vivo series";
    }
}

// class iphone extends mobile
// {
//     function iphonefunction()
//     {
//         return "iphone series";
//     }
// }

// class nothing extends mobile
// {
//     function nothingfunction()
//     {
//         return "nothing new series start";
//     }
// }

$phone = new mobile;
echo $phone->mobilefunction();
echo "<br>";
echo $phone->realmefunction();
echo "<br>";
echo $phone->samsungfunction();
// echo  $phone->mobilefunction();
// echo "<br>";
// echo  $mobile->mobilefunction();
// echo "<br>";
// echo  $phone->realmefunction();
// echo "<br>";
// $phone = new samsung;
// echo  $phone->samsungfunction();
// echo "<br>";
// $phone = new vivo;
// echo  $phone->vivofunction();
// echo "<br>";
// $phone = new iphone;
// echo  $phone->iphonefunction();
// echo "<br>";
// $phone = new nothing;
// echo  $phone->nothingfunction();
