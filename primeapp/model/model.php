<?php

date_default_timezone_set("Asia/Kolkata");

class model
{
    public $dbconnection = "";

    public function __construct()
    {
        $this->dbconnection = mysqli_connect("localhost", "root", "", "primeapp");
    }

    public function insert($table, $data)
    {
        $column = implode("`,`", array_keys($data));
        $value = implode("','", $data);

        $SQL = "INSERT INTO $table(`$column`) VALUES('$value')";
        $SQLEx = $this->dbconnection->query($SQL);
        // echo "<pre>";
        // print_r($SQLEx);
        
        if ($SQLEx > 0) {
            $Data["Msg"] = "Success";
            $Data["Data"] = 1;
            $Data["Code"] = 1;
        } else {
            $Data["Msg"] = "Try again";
            $Data["Data"] = 0;
            $Data["Code"] = 0;
        }
        return $Data;
    }

    public function login($username, $password)
    {
        $loginquery = 'SELECT * FROM `employee` WHERE (`username`="' . $username . '" OR `email` ="' . $username . '") AND password ="' . $password . '"';

        $data =  mysqli_fetch_assoc(mysqli_query($this->dbconnection, $loginquery));

        return $data;
    }

    public function logintime($id)
    {
        $data = date('Y/m/d h:i:s');

        $SQL = "UPDATE employee SET lastlogin='$data' WHERE id='$id'";

        $SQLEx = $this->dbconnection->query($SQL);
        // echo"<pre>";
        // print_r($SQLEx);

    }
}

