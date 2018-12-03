<?php 

$url = isset($_GET['url']) ? $_GET['url'] : '/'; 

require_once "app/controllers/admin/HomeController.php";
require_once "app/controllers/admin/ProductController.php";
require_once "app/controllers/LoginController.php";
require_once "app/controllers/web/ClientController.php";

switch($url){
    case 'admin/':
        $model = new HomeController();
        $model->index();
        break;
    case '/':
        $model = new ClientController();
        $model->index();
        break;
    case 'admin/products':

        $model = new ProductController();
        $model->index();
        break;

    case 'admin/products/create';
        $model = new ProductController();
        $model->create();
        break;

    case 'admin/products/store':
        $model = new ProductController();
        $model->store();
        break;
    case 'login':
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $model = new LoginController();
            $model->getLogin();
            break;
        }else {
            $model = new LoginController();
            $model->postLogin();
            break;
        }
    case 'admin/logout':
        $model = new LoginController();
        $model->logout();
        break;
    default:
        $model = new HomeController();
        $model->notFound();
        break;
}

