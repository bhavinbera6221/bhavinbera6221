<?php

trait realme{

    public function realmefunction()
    {
       return "realme series";
    }
}

trait samsung{

    public function samsungfunction()
    {
       return "samsung series";
    }
}
trait vivo{

    public function vivofunction()
    {
       return "vivo series";
    }
}

trait iphone{

    public function iphonefunction()
    {
       return "iphone series";
    }
    public function iphonefunction1()
    {
       return "iphone1 series";
    }
}

trait nothing{

    public function nothingfunction()
    {
       return "nothing series";
    }
}
class mobile{
    use realme,samsung,vivo,iphone,nothing;
     function mobilefunction()
    {
        return "all mobile series available here";
    }
}     
$mobile = new mobile;
echo $mobile->mobilefunction();
echo "<br>";
echo $mobile->realmefunction();
echo "<br>";
echo $mobile->samsungfunction();
echo "<br>";
echo $mobile->vivofunction();
echo "<br>";
echo $mobile->iphonefunction();
echo "<br>";
echo $mobile->iphonefunction();
echo "<br>";
echo $mobile->nothingfunction();
?>