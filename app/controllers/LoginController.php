<?php 
session_start();
require_once 'app/models/User.php';
class LoginController{
	public function getLogin(){
		$title = "Đăng nhập";
		include_once 'app/views/auth/login.php';
	} 

	public function postLogin(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$model = new User();
		$user = $model->findUserByEmail($email);
		//var_dump($user);
		//var_dump(password_hash(123456, PASSWORD_DEFAULT));die;
		if($user && password_verify($password, $user['password'])){
			$_SESSION['auth']['id'] = $user['id'];
			$_SESSION['auth']['name'] = $user['name'];
			$_SESSION['auth']['email'] = $user['email'];
			$_SESSION['auth']['role'] = $user['role'];

			header('location: admin/');
		}else {
			$title = "Đăng nhập";
			$msg = "Sai mật khẩu/tài khoản";
			include_once 'app/views/auth/login.php';

		}
	}

	public function logout()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$model = new HomeController();
			$model->index();
		} else{
			session_start();
			unset($_SESSION['auth']);
			header('location: login');	
		}
		
	}

}
 ?>
