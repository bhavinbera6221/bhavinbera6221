<?php

class mobile{
    function mobilefunction(){ return "this is all phone series."; }
} 
 

class realme extends mobile{
    function realmefunction(){return "realme series"; }
}


class samsung extends mobile{
    function samsungfunction(){return "samsung series"; }
}
class vivo extends mobile{
    function vivofunction(){return "vivo series"; }
}
class iphone extends mobile{
    function iphonefunction(){return "iphone series"; }
}

class nothing extends mobile{
    function nothingfunction(){return "nothing new series start"; }
}

$phone = new mobile;
echo  $phone->mobilefunction();
echo "<br>";
echo  $phone->mobilefunction();
echo "<br>";
$realme = new realme;
echo  $realme->realmefunction();
echo "<br>";
$phone = new samsung;
echo  $phone->samsungfunction();
echo "<br>";
$phone = new vivo;
echo  $phone->vivofunction();
echo "<br>";
$phone = new iphone;
echo  $phone->iphonefunction();
echo "<br>";
$phone = new nothing;
echo  $phone->nothingfunction();

?>