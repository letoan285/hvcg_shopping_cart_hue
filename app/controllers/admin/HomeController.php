<?php 
//session_start();
class HomeController {
    public function __construct()
    {
        //var_dump($_SESSION['auth']);die;
        //die('1234');
        if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
            header('location: ../index.php');
        }
    }
    public function index()
    {
        $hint = "../";

        $view = "app/views/layouts/admin.php";

       include_once $view;
    }
    public function notFound()
    {
        
    }
}

?>
