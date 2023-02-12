<?php
session_start();

include_once("model/model.php");

class controller extends model
{

    public function __construct()
    {
        ob_start();
        parent::__construct();
        // echo "<pre>";
        //         print_r($_SERVER);

        if ($_SERVER['PATH_INFO']) {
            switch ($_SERVER['PATH_INFO']) {
                case '/registration':
                    include_once("view/header.php");
                    include_once("view/registration.php");

                    if (isset($_POST['save'])) {
                        // echo "<pre>";
                        array_pop($_POST);
                        // print_r($_POST);
                        // echo "</pre>";

                        // $save = array(
                        //     $username = $_POST['username'],
                        //     $firstname = $_POST['firstname'],
                        //     $lastname = $_POST['lastname'],
                        //     $email = $_POST['email'],
                        //     $birth_date = $_POST['birth_date'],
                        //     $password = $_POST['password'],
                        // );

                        if (isset($_FILES['profile_pic'])) {

                            if ($_FILES['profile_pic']['size'] < 1000000) {

                                $tmp_name = $_FILES['profile_pic']['tmp_name'];

                                $img_name = $_FILES['profile_pic']['name'];
                                $random = rand(1001, 10001);
                                $ext = pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
                                $filename = $random . date("d_m_y_h_i_s") . "." . $ext;
                                move_uploaded_file($tmp_name, "uploads/$filename");
                            } else {
                                $name = "default.jpg";
                            }
                        } else {
                            $name = "default.jpg";
                        }
                        $_POST['firstname'] = $firstname;
                        $_POST['lastname'] = $lastname;
                        if(preg_match('/^[a-zA-Z]{5,}$/', $firstname & $lastname)) { 
                        }

                        $fetchdata = array_merge($_POST, array('prof_pic' => $filename));

                        if (strpos($_POST['password'], $_POST['username']) !== false || strpos($_POST['password'], $_POST['username']) !== false) {
                            echo "<script>alert('Please Enter DIfferent Username and Password')</script>";
                        } else {

                            $insert = $this->insert('employee', $fetchdata);
                            if ($insert['Code'] == 1) {
                                header("location:login");
                            } else {
                                echo "<script>alert(failed to login !!)</script>";
                            }
                        }
                    }
                    break;
                case '/login':
                    include_once("view/header.php");
                    include_once("view/login.php");

                    if (isset($_POST['login'])) {
                        if ($_POST['username'] != "" &&  $_POST['password'] != "") {
                            if (strpos($_POST['password'], $_POST['username']) !== false || strpos($_POST['password'], $_POST['username']) !== false) {
                                echo "<script>alert('Username found in the password')</script>";
                            } else {
                                # code...


                                $LoginRes = $this->login($_POST['username'], $_POST['password']);

                                $this->logintime($LoginRes['id']);

                                if (isset($LoginRes['id'])) {
                                    $_SESSION['UserDetail'] = $LoginRes;

                                    header("location:dashboard");
                                } else {
                                    echo "<script>alert('Invelid User !!!!') </script>";
                                }
                            }
                        } else {
                            echo "<script>alert('All field is required !!!!') </script>";
                        }
                    }
                    break;

                case '/dashboard':
                    include_once("view/header.php");
                    include_once("view/dashboard.php");
                    break;

                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;
                default:
                    # code...
                    break;
            }
        } else {
            header("location:registration");
        }
        ob_flush();
    }
}
$controller = new controller;
