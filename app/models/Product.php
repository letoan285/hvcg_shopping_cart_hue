<?php 
require_once "BaseModel.php";

class Product extends BaseModel {
	protected $table = 'products';
	
	public $columns = ['name', 'list_price', 'sell_price', 'feature_image', 'detail', 'category_id'];
}


 ?>
