 <?php
  session_start();
  require_once('model/model.php');

  class controller extends Model
  {
    public $base_url = "";
    function __construct()
    {
      ob_start();
      parent::__construct();
      // s// print_r($_SERVER);
      // echo "http://localhost/bhavin/mvc/";
      $Arrofreq = explode("/", $_SERVER['REQUEST_URI']);
      // print_r($Arrofreq);
      $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $Arrofreq[1] . "/" . $Arrofreq[2];
      $this->base_url_assets = $this->base_url . "/assets/";
      // exit;$this->base_url_assets
      if (isset($_SERVER['PATH_INFO'])) {
        switch ($_SERVER['PATH_INFO']) {
          case '/home':
            include_once("views/header.php");
            include_once("views/main.php");
            include_once("views/footer.php");
            break;

          case '/admindashboard':
            include_once("views/admin/header.php");
            include_once("views/admin/dashboard.php");
            include_once("views/admin/footer.php");
            break;
            // case '/allusers':
            //   include_once("views/admin/header.php");
            //   include_once("views/admin/dashboard.php");
            //   include_once("views/admin/footer.php");
            //   break;

          case '/signin':
            include_once("views/headersubpage.php");
            include_once("views/loginpage.php");
            include_once("views/footer.php");
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

          case '/registration':
            include_once("views/headersubpage.php");
            include_once("views/registration.php");
            include_once("views/footer.php");
            // $allcountryData = $this->select("country");
            // $allstateData = $this->select("state");
            // $allCityData = $this->select("city");
            if (isset($_POST['regisration'])) {

              $hobby = implode(",", $_POST['hobby']);
              array_pop($_POST);
              unset($_POST['hobby']);

              // $InsertArray = array(
              //   "fullname" => $_POST['fullname'],
              //   "username" => $_POST['username'],
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
              $RegistUserData = $this->insert('user', $InsertArray);
              if ($RegistUserData['Code'] == 1) {
                header('location:signin');
              } else {
                echo  "Error";
              }
            }
            break;

          case '/deleteuser':
            $FetchAllUserData = $this->delete('user', array("id" => $_GET['userid'], "roll_id" => 2));
            header("location:admindashboard");
            break;

          case '/edituser':

            // $UserDataById = $this->select('user',array("id" => $_REQUEST['userid']));

            $UserDataById = $this->select_join(
              'user',
              array(
                "city" => "user.city=city.city_id",
                "state" => "state.state_id=city.state_id",
                "country" => "country.country_id=state.country_id"
              ),

              array("user.id" => $_REQUEST['userid'])
            );  

            $allcountryData = $this->select("country");
            $allstateData = $this->select("state");
            $allCityData = $this->select("city");

            include_once("views/admin/header.php");
            include_once("views/admin/edituser.php");
            include_once("views/admin/footer.php");

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
              $updateRes = $this->update("user", $UpdateData, $UpdatewhereData);

              if ($updateRes['Code'] == 1) {
                header("location:allusers");
              } else {
                echo "<script>alert('Error!!!')</script>";
              }
            }
            break;
            
          case '/statedatabycountryid':
            // echo "<pre>";
            // print_r($_REQUEST);
            $allstateDataByCountryId = $this->select("state", array("country_id" => $_REQUEST['countryid']));
            echo json_encode($allstateDataByCountryId);
            break;

          case '/citydatabystateid':
            $allcityDataByStateId = $this->select("city", array("state_id" => $_REQUEST['stateid']));
            echo json_encode($allcityDataByStateId);
            break;

          case '/logout':
            include_once("views/admin/logout.php");

          case '/allusers':
            $FetchAllUserData = $this->select('user', array("roll_id" => 2));
            include_once("views/admin/header.php");
            include_once("views/admin/allusersview.php");
            include_once("views/admin/footer.php");
            break;

          case '/addnewuser':
            include_once("views/admin/header.php");
            include_once("views/admin/addnewuser.php");
            include_once("views/admin/footer.php");


            if (isset($_POST['submit'])) {

              $hobby = implode(",", $_POST['hobby']);
              array_pop($_POST);
              unset($_POST['hobby']);
              $InsertArray = array_merge($_POST, array("hobby" => $hobby));
              $RegistUserData = $this->insert('user', $InsertArray);
              if ($RegistUserData['Code'] == 1) {
                header('location:allusers');

                echo "<script>alert(New User Added successfully!!)</script>";
              } else {
                echo  "Error";
              }
            }
            break;
        }
      } else {
        header('location:signin');
      }
      ob_flush();
    }
  }
  $controller = new controller;

  ?>