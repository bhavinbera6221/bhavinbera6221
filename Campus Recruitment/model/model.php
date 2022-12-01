<?php

class Model
{

    public $dbconnection = "";
    public function __construct()
    {

        try {

            $this->dbconnection = new mysqli("localhost", "root", "", "mvc_cr");
            // echo "inside try";
        } catch (\Exception $e) {
            // echo "inside catch";
            if (!file_exists("logs")) {
                mkdir('logs');
            }
            $Msg = PHP_EOL . "Error Message =>>" . $e->getMessage() . PHP_EOL;
            $Msg .= "Error Date Time=>>" . date("d-m-y H:i:s A") . PHP_EOL;
            // $Msg = 'Error';
            $file = 'logs/' . date("d-m-y") . 'log.txt';
            file_put_contents($file, $Msg, FILE_APPEND);
        }
        // echo "<pre>";
        // print_r($this->dbconnection);
    }
    public function select($tbl, $where = "")
    {
        $SQL = "SELECT * FROM $tbl";
        if ($where != "") {

            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= "$key = '$value' AND ";
            }
            $SQL = rtrim($SQL, "AND ");
        }
        // echo $SQL;
        $SQLEx = $this->dbconnection->query($SQL);
        // return $SQL;
        echo "<pre>";
        print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }
            // echo "<pre>";
            // print_r($FetchData);
            $Data['Msg'] = "Success";
            $Data['Data'] = $FetchData;
            $Data['Code'] = 1;
        } else {
            $Data['Msg'] = "Try Again";
            $Data['Data'] = "0";
            $Data['Code'] = "0";
        }
        return $Data;
    }
    public function login($uname,$pass)
    {
        // $SQL = "SELECT * FROM $tbl";
        $SQL = 'SELECT * FROM `users` WHERE (`username`="' . $uname . '" OR `email`="' . $uname . '" OR `mobile`="' . $uname . '") AND password="' . $pass . '"';        

        // echo $SQL;
        $SQLEx = $this->dbconnection->query($SQL);
        // return $SQL;
        echo "<pre>";
        print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }
            // echo "<pre>";
            // print_r($FetchData);
            $Data['Msg'] = "Success";
            $Data['Data'] = $FetchData;
            $Data['Code'] = 1;
        } else {
            $Data['Msg'] = "Try Again";
            $Data['Data'] = "0";
            $Data['Code'] = "0";
        }
        return $Data;
    }

    // public function login($uname, $pass)
    // {
    //     $SQL = 'SELECT * FROM `users` WHERE (`username`="' . $uname . '" OR `email`="' . $uname . '" OR `mobile`="' . $uname . '") AND password="' . $pass . '"';        

    //     $SQLEx = $this->dbConnection->query($SQL);
        
    //     if ($SQLEx->num_rows > 0) {

    //         while ($fData = $SQLEx->fetch_object()) {
    //             $FetchData[] = $fData;
    //         }
    //         $Data['Msg'] = "Success";
    //         $Data['Data'] = $FetchData;
    //         $Data['Code'] = 1;
    //     } else {
    //         $Data['Msg'] = "Try Again";
    //         $Data['Data'] = 0;
    //         $Data['Code'] = 0;
    //     }
    //     return $Data;
    // }


    public function insert($tbl, $Data)
    {
        // echo "<pre>";
        // print_r($Data);
        // print_r(array_keys($data));
        $cols = implode(",", array_keys($Data));
        $vals = implode("','", $Data);
        $SQL = "INSERT INTO $tbl($cols) VALUES('$vals')";
        $SQLEx = $this->dbconnection->query($SQL);
        if ($SQLEx > 0) {
            $Data['Msg'] = "Success";
            $Data['Data'] = 1;
            $Data['Code'] = 1;
        } else {
            $Data['Msg'] = "Try Again";
            $Data['Data'] = 0;
            $Data['Code'] = 0;
        }
        return $Data;
    }
}
// $Model = new Model; 
// echo $Model->select("users");
