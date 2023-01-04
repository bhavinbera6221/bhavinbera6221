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


$phone = new mobile;
echo $phone->mobilefunction();
echo "<br>";
echo $phone->realmefunction();
echo "<br>";
echo $phone->samsungfunction();

