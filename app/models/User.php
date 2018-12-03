<?php 
require_once 'app/models/BaseModel.php';
class User extends BaseModel {
	public $table = 'users';

	public function findUserByEmail($email){
		//var_dump($email);die;
		$sql = "select * from ".$this->table." where email = '$email' ";
		//var_dump($sql);die;
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        $rs = $stmt->fetch();
        //var_dump($rs[0]);die;
        return $rs;
	}

}

 ?>