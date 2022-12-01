<?php
session_start();

include_once("model/model.php");
error_reporting(0);
class Controller extends Model
{

    public $base_url = "";
    public function __construct()
    {
        ob_start();
        parent::__construct();
        $ArrofReq = explode("/", $_SERVER['REQUEST_URI']);
        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ArrofReq[1] . "/" . $ArrofReq[2] . "/" . $ArrofReq[3];
        $this->base_url_assets = $this->base_url . "/assets/";

        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once('view/header.php');
                    include_once('view/home.php');
                    include_once('view/footer.php');
                    break;

                case '/about':
                    include_once('view/header.php');
                    include_once('view/about.php');
                    include_once('view/footer.php');
                    break;

                case '/contact':
                    include_once('view/header.php');
                    include_once('view/contact.php');
                    include_once('view/footer.php');
                    break;

                case '/services':
                    include_once('view/header.php');
                    include_once('view/services.php');
                    include_once('view/footer.php');
                    break;

                case '/signin':
                    include_once('view/header.php ');
                    include_once('view/login.php');
                    include_once('view/footer.php');
                    if (isset($_POST['login'])) {
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                          $loginRes = $this->login($_POST['username'], $_POST['password']);
                          if ($loginRes['Code'] == 1) {
                            $_SESSION['UserData'] = $loginRes['Data'][0];
                            if ($loginRes['Data'][0]->roll_id == 1) {
                              header("location:admindashboard");
                            } else {
                              header("location:home");
                            }
                          } else {
          
                            echo "<script>alert('Invalid User!!!')</script>";
                          }
                        } else {
                          echo "<script>alert('Username and password is Required!!!')</script>";
                        }
                      }
                    break;

                    case '/logout':
                        include("view/logout.php");

                case '/registration':
                    include_once('view/header.php');
                    include_once('view/registration.php');
                    include_once('view/footer.php');
                    if (isset($_POST['regisration'])) {

                        $hobby = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['hobby']);

                        // $InsertArray = array(
                        //   "fullname" => $_POST['name'],
                        //   "username" => $_POST['user_name'],
                        //   "email" => $_POST['email'],
                        //   "mobile" => $_POST['mobile'],
                        //   "gender" => $_POST['gender'],
                        //   "hobby" => $hobby,
                        //   "country" => $_POST['country'],
                        //   "state" => $_POST['state'],
                        //   "city" => $_POST['city'],
                        //   "prof_pic" => $_POST['prof_pic'],
                        //   "password" => $_POST['password']);
                        // move file uplode
                        $tmp_name = $_FILES['prof_pic']['tmp_name'];
                        $file_name = $_FILES['prof_pic']['name'];
                        move_uploaded_file($tmp_name, "uploads/$file_name");

                        $InsertArray = array_merge($_POST, array("hobby" => $hobby, "prof_pic" => $file_name));
                        // $InsertArray = array_merge($_POST, array("hobby" => $hobby));
                        $RegistUserData = $this->insert('users', $InsertArray);
                        if ($RegistUserData['Code'] == 1) {
                            header('location:signin');
                        } else {
                            echo  "Error";
                        }
                    }
                    break;

                case '/Showallusers':
                    echo "all";
                    echo "<pre>";
                    $FetchallusersData = $this->select("users");
                    print_r($FetchallusersData);
                    // include_once('view/header.php');
                    // include_once('view/registration.php');
                    // include_once('view/footer.php');
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controller = new controller;
