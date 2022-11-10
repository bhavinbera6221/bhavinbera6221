<?php
date_default_timezone_set('Asia/Kolkata');
class Model
{
    public $dbConnection = "";
    public function __construct()
    {
        //    $this->dbConnection = new mysqli("localhost","root","","bhavin");
        // echo "<pre>";
        // print_r($this->dbConnection );
        try {
            $this->dbConnection = new mysqli("localhost", "root", "", "bhavin");
            // echo "inside try";
        } catch (\Exception $e) {
            // echo "Error in Database";
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
        // print_r($this->dbConnection);
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
        $SQLEx = $this->dbConnection->query($SQL);

        if ($SQLEx->num_rows > 0) {


            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }
            // echo "<pre>";
            // print_r($FetchData );
            $Data['Msg'] = "Success";
            $Data['Data'] = $FetchData;
            $Data['Code'] = 1;
        } else {
            $Data['Msg'] = "Try Again";
            $Data['Data'] = 0;
            $Data['Code'] = 0;
        }
        return $Data;
    }
    public function select_join($tbl,$join_data,$where = "")
    {
        $SQL = "SELECT * FROM $tbl";
        foreach ($join_data as $jkey => $jvalue) {
            $SQL .= " JOIN $jkey ON $jvalue ";
        }
        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= "$key = '$value' AND ";
            }
            $SQL = rtrim($SQL, "AND ");
        }
            // echo $SQL;
            // exit;
        // echo $SQL;
        $SQLEx = $this->dbConnection->query($SQL);

        if ($SQLEx->num_rows > 0) {


            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }
            // echo "<pre>";
            // print_r($FetchData );
            $Data['Msg'] = "Success";
            $Data['Data'] = $FetchData;
            $Data['Code'] = 1;
        } else {
            $Data['Msg'] = "Try Again";
            $Data['Data'] = 0;
            $Data['Code'] = 0;
        }
        return $Data;
    }
    public function login($uname, $pass)
    {
        $SQL = 'SELECT * FROM `user` WHERE (`username`="' . $uname . '" OR `email`="' . $uname . '" OR `mobile`="' . $uname . '") AND password="' . $pass . '"';
        $SQLEx = $this->dbConnection->query($SQL);
        if ($SQLEx->num_rows > 0) {

            while ($fData = $SQLEx->fetch_object()) {
                $FetchData[] = $fData;
            }

            $Data['Msg'] = "Success";
            $Data['Data'] = $FetchData;
            $Data['Code'] = 1;
        } else {
            $Data['Msg'] = "Try Again";
            $Data['Data'] = 0;
            $Data['Code'] = 0;
        }
        return $Data;
    }
    public function insert($tbl, $Data)
    {
        // echo "<pre>";
        // print_r($Data);
        // print_r(array_keys($Data));
        $cols = implode(",", array_keys($Data));
        $vals = implode("','", $Data);
        // echo $sql = "INSERT INTO users(user_name,email,gender,password) VALUES('as','as','as','as')";
        // echo "<br>";
        $SQL = "INSERT INTO $tbl($cols) VALUES('$vals')";
        $SQLEx = $this->dbConnection->query($SQL);
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
    public function update($tbl, $Data, $where)
    {
        $SQL = "UPDATE $tbl SET ";
        foreach ($Data as $key => $value) {
            $SQL .= " $key = '$value',";
        }
        $SQL = rtrim($SQL, ",");
        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        // echo "<pre>";
        $SQL = rtrim($SQL, "AND");
        // print_r($SQL);
        // exit;
        $SQLEx = $this->dbConnection->query($SQL);
        // print_r($SQLEx);

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
    public function delete($tbl, $where)
    {
        $SQL = "DELETE FROM $tbl";
        $SQL .= " WHERE ";

        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL, "AND");
        // $SQL;
        // exit;
        $SQLEx = $this->dbConnection->query($SQL);
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
// echo "<br>";
// $Mo/del = new Model;
// echo "<br>";
// $Model->select("user");
// echo "<br>";
// echo $Model->select("email");
// echo "<br>";
// echo $Model->select("gender");
// echo $Model->select("password");
