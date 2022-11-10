<?php
if (isset($_REQUEST['Download'])) {


    $file_name = "penguins.zip";
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $file_name . '"');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name)); //Absolute URL
    ob_clean();
    flush();
    readfile($file_name); //Absolute URL
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .btn{
            align-items:center;
            align-content: center;
            margin: 30px;
            margin-top: 10px;
            cursor: pointer;
            background:black;
            color: whitesmoke;
            /* margin: left 200px; */
        }
    </style>
</head>

<body style="background-color: black;">
    
    <class class="mt-3 center">
    <form method="post" >
            <input type="submit" class="btn"  value="Download" name="Download" id="download">
        </class>
    </form>
</body>

</html>