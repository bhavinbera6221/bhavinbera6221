<?php


class controller
{

    public $base_url = "";
    public function __construct()
    {
        $ArrofReq = explode("/", $_SERVER['REQUEST_URI']);
        $this->base_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $ArrofReq[1] . "/" . $ArrofReq[2] . "/" . $ArrofReq[3];
        $this->base_url_assets = $this->base_url . "/assets/";
        

        if ($_SERVER['PATH_INFO']) {
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
            }
        }
    }
}

$controller = new controller;
?>