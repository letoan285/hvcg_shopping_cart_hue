<?php

require_once "app/models/Product.php";
require_once "app/models/Category.php";

class ProductController {
    public function __construct(){
        if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
            header('location:../index.php');
        } 
    }
    public function index()
    {
        $hint = "../";
        $products = Product::all();
        $title = "Danh sach san pham";
        $view = "app/views/products/index.php";

        include "app/views/layouts/admin.php";
    }

    public function create()
    {
        $hint = "../";
        $categories = Category::all();
        $title = "Them moi san pham";
        
        $view = "app/views/products/create.php";

        include "app/views/layouts/admin.php";
    }
    public function store()
    {
        $name = $_POST['name'];
        $list_price = $_POST['list_price'];
        $sell_price = $_POST['sell_price'];
        $detail = $_POST['detail'];
        $image = $_FILES['image'];
        $category_id = $_POST['category_id'];

        $product = new Product();

        $product->name = $name;
        $product->list_price = $list_price;
        $product->sell_price = $sell_price;
        $product->detail = $detail;
        $product->feature_image = 'noimage.jpg';
        $product->category_id = $category_id;
        //var_dump($product);die;
        $product->insert();

        header("location: products");
    }
}