<?php

class model
{
    public $dbconnection = "";
    public function __construct()
    {
        $this->dbconnection = new mysqli("localhost", "root", "", "mvc_ajax");
    }

    public function select($tbl)
    {
        $SQL = "SELECT * FROM $tbl";
        $SQLEx = $this->dbconnection->query($SQL);


        if ($SQLEx->num_rows > 0) {
            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }
            // echo "<pre>";
            // print_r($FetchData);
            //     $Data['Msg'] = "Success";
            //     $Data['Data'] = $FetchData;
            //     $Data['Code'] = 1;
            // } else {
            //     $Data['Msg'] = "Try Again";
            //     $Data['Data'] = "0";
            //     $Data['Code'] = "0";
        }
        return $FetchData;
    }

    public function insert($tbl,$Data)
    {
        $cols = implode(",", array_keys($Data));
        $vals = implode(",", $Data);

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
