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

    public function insert($tbl, $Data)
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
    public function insertuser($Data)
    {
        // echo "<pre>";
        // print_r($Data);
        // exit;
        // $id = $Data['id'];
        $name = $Data['name'];
        $email = $Data['email'];
        $mobile = $Data['mobile'];
        $gender = $Data['gender'];
        $query = "INSERT INTO user VALUES('','$name','$email','$mobile','$gender')";

        mysqli_query($this->dbconnection, $query);
    }

    public function update($tbl, $Data, $where)
    {
        $SQL = "UPDATE $tbl SET ";
        foreach ($Data as $key => $value) {
            $SQL .= " $key = '$value',";
        }

        // $SQL = rtrim($SQL, ",");
        // $SQL .= " WHERE";
        // foreach ($where as $key => $value) {
        //     $SQL .= " $key = '$value' AND";
        // }
        // echo "<pre>";
        // $SQL = rtrim($SQL, "AND");
        // // print_r($SQL);
        // // exit;
        // $SQLEx = $this->dbconnection->query($SQL);
        // // print_r($SQLEx);

        // if ($SQLEx > 0) {
        //     $Data['Msg'] = "Success";
        //     $Data['Data'] = 1;
        //     $Data['Code'] = 1;
        // } else {
        //     $Data['Msg'] = "Try Again";
        //     $Data['Data'] = 0;
        //     $Data['Code'] = 0;
        // }
        // return $Data;
    }
    public function updatenewuser($add)
    {
        $id = $add['id'];
        $name = $add['name'];
        $email = $add['email'];
        $mobile = $add['mobile'];
        $gender = $add['gender'];
        $query = "UPDATE user SET name='$name',email='$email',mobile='$mobile',gender='$gender' WHERE id='$id'";
        $data = mysqli_query($this->dbconnection, $query);

        return $data;
    }

    public function edituser($get)
    {
        // print_r($get);

        $id = $get['id'];
        $query = "SELECT * FROM user WHERE id ='$id'";
        $data = mysqli_fetch_assoc(mysqli_query($this->dbconnection, $query));
        // print_r($data);
        // exti;
        return $data;
    }


    public function delete($get)
    {
        $id = $get['id'];
        // print_r($id);
        // exit;
        $query = "DELETE FROM user WHERE id ='$id'";
        $data = mysqli_query($this->dbconnection, $query);
        print_r($data);
        return $data;
    }
}
