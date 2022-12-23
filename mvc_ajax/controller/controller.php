<?php
include_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/ajax':
                    // $selectDAta = $this->select("user");
                    include_once("view/ajax.php");
                    break;

                case '/selectdata':
                    $selectDAta = $this->select("user");
                    echo  json_encode($selectDAta);
                    break;

                case '/saveuserdata':
                    $saveData = $this->insertuser($_POST);
                    // echo json_encode($saveData);
                    break;

                case '/edituserdata':
                    $data = $this->edituser($_POST);
                    echo json_encode($data);
                    break;
                    
                    case '/updateuserdata':
                        $updateuser = $this->updatenewuser($_POST);
                    break;

                    case '/deleteuserdata':
                        $updateuser = $this->delete($_POST);
                    break;
            }
        } else {
            header("location:ajax");
        }
    }
}
$obj = new controller;
