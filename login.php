<?php 
$hint = './';
require_once $hint.'app/controllers/LoginController.php';
$ctr = new LoginController();
switch ($_SERVER['REQUEST_METHOD']) {
	case 'POST':
		$ctr->postLogin();
		break;
	
	default:
		$ctr->getLogin();
		break;
}

 ?>