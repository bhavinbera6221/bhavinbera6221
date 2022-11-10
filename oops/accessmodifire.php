<?php

class vehical{
    public $amtsbus = "use every people";
    protected $brtsbus = "use people in city only";
    private  $schoolbus = "use only school student";
}


class vehicalclass extends vehical{
    function typeofvehical(){
        echo $this->brtsbus;
    }
}
$object = new vehicalclass;
echo $object->amtsbus;
// echo $object->schoolbus;
echo "<br>";
echo $object->typeofvehical();

?>