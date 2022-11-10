<?php

class constructdemo{

    public function __construct(){
        
        echo "called contruct--";
        
    }
    function __destruct(){
        
        echo "called destruct";
        
    }

} 
$object = new constructdemo;
// echo $object->__construct;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>contruct</h2>
    <p>contruct acecss deault when object created</p>
</body>
</html>