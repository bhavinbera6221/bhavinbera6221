<?php


class address{
    public $add;
    public function country($val){
        $this->add .= "country is $val  ";
        return $this;
    }
    
    public function district($dis){
        $this->add .= "district is $dis  ";
        return $this;
    }
    public function taluka($tal){
        $this->add .= "taluka is $tal .";
        return $this;
    }
}
$address = new address;

echo $a = $address -> country("gujrat") ->district("jamnagar") ->taluka("lalpur") -> add;

?>
