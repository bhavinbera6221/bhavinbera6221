<?php
session_start();

include_once("model/model.php");
// error_reporting(0);
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
                    session_destroy();
                    header("location:signin");
                    break;

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

                case '/admindashboard':
                    $allrequirement = $this->select('requirement');
                    include("view/admin/admindashboard.php");
                    include("view/admin/viewrequirement.php");
                    break;

                case '/apply':
                    $allrequirement = $this->select('requirement');
                    include_once('view/header.php');
                    include("view/applyrequirement.php");
                    // include_once('view/footer.php');
                    if (isset($_POST['submit'])) {
                        $InsertArray = array(
                            "fullname" => $_POST['fullname'],
                            "email" => $_POST['email'],
                            "contact" => $_POST['contact'],
                            "gyear" => $_POST['gyear'],
                            "address" => $_POST['address'],
                            "city" => $_POST['city'],
                        );
                        // $UpdateData = $_POST;
                        $updateRes = $this->insert("candidate", $InsertArray);
                        if ($updateRes['Code'] == 1) {
                            header("location:apply");
                        } else {
                            echo "<script>alert('Error!!!')</script>";
                        }
                    }
                    break;


                case '/allcandidate':
                    $FetchAllCandidateData = $this->select('candidate');
                    include_once('view/admin/admindashboard.php');
                    include_once('view/admin/allcandidate.php');
                    break;

                    
                    case '/deletecan':
                        $deleteCandidateData = $this->delete('candidate', array("id" => $_GET['userid']));
                        header("location:allcandidate");
                        break;

                case '/allusers':
                    $FetchAllUserData = $this->select('users', array("roll_id" => 2));
                    include_once('view/admin/admindashboard.php');
                    include_once('view/admin/allusers.php');
                    break;

                case '/edituser':

                    $UserDataById = $this->select('users', array("id" => $_REQUEST['userid']));

                    include_once("view/admin/admindashboard.php");
                    include_once("view/admin/edituser.php");
                    // include_once("views/admin/footer.php");

                    if (isset($_REQUEST['update'])) {
                        $hobby = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['hobby']);


                        $UpdatewhereData = array("id" => $_REQUEST['userid']);
                        // move file uplode
                        if (isset($_FILES['prof_pic'])) {
                            if ($_FILES['prof_pic']['error'] == 0) {
                                if ($_FILES['prof_pic']['size'] < 1000000) {

                                    $tmp_name = $_FILES['prof_pic']['tmp_name'];
                                    $image_name = $_FILES['prof_pic']['name'];
                                    $rand = rand(10000, 100000);
                                    $ext = pathinfo($_FILES['prof_pic']['name'], PATHINFO_EXTENSION);
                                    $file_name =  $rand . "." . $ext;
                                    move_uploaded_file($tmp_name, "uploads/" . $file_name);
                                    unlink("uploads/" . $_POST['old_prof_pic']);
                                } else {
                                    $file_name = "default.jpg";
                                }
                            } else {
                                $file_name = $_REQUEST['old_prof_pic'];
                            }
                        } else {
                            $file_name = "default.jpg";
                        }

                        unset($_POST['old_prof_pic']);

                        $UpdateData = array_merge($_POST, array("hobby" => $hobby, "prof_pic" => $file_name));
                        $updateRes = $this->update("users", $UpdateData, $UpdatewhereData);
                        if ($updateRes['Code'] == 1) {
                            header("location:allusers");
                        } else {
                            echo "<script>alert('Error!!!')</script>";
                        }
                    }
                    break;


                case '/deleteuser':
                    $deleteUserData = $this->delete('users', array("id" => $_GET['userid'], "roll_id" => 2));
                    header("location:allusers");
                    break;



                case '/addnewrequirement':
                    include_once("view/admin/admindashboard.php");
                    include("view/admin/addnewrequirement.php");
                    if (isset($_POST['submit'])) {

                        $InsertArray = array(
                            "company" => $_POST['company'],
                            "address" => $_POST['address'],
                            "state" => $_POST['state'],
                            "city" => $_POST['city'],
                            "contact" => $_POST['contact'],
                            "job_roll" => $_POST['job_roll'],
                            "email" => $_POST['email'],
                            "work_time" => $_POST['work_time'],
                        );

                        $insertCompanyData = $this->insert('requirement', $InsertArray);
                        if ($insertCompanyData['Code'] == 1) {
                            // echo "<script>alert('inserted!!!')</script>";
                            header("location:admindashboard");
                        } else {
                            echo "<script>alert('Failed!!!')</script>";
                        }
                    }
                    break;

                case '/companydelete':
                    $deleteCompanyData = $this->delete('requirement', array("id" => $_GET['userid']));
                    header("location:admindashboard");
                    break;

                case '/companyedit':
                    $CompanyDataById = $this->select('requirement', array("id" => $_REQUEST['userid']));

                    include_once("view/admin/admindashboard.php");
                    include_once("view/admin/companyedit.php");
                    // include_once("views/admin/footer.php");

                    if (isset($_REQUEST['update'])) {

                        $UpdatewhereData = array("id" => $_REQUEST['userid']);
                        array_pop($_POST);
                        $UpdateData = $_POST;
                        $updateRes = $this->update("requirement", $UpdateData, $UpdatewhereData);

                        if ($updateRes['Code'] == 1) {
                            header("location:admindashboard");
                        } else {
                            echo "<script>alert('Error!!!')</script>";
                        }
                    }
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controller = new controller;
