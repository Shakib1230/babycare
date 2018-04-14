<?php 
	
	 include'connection.php';
	 require_once ('../model/user.php');

	 class AnotherData {


	 	public function childList(){
	 			$objuser = new User();
	 			return $objuser->get_user_list();
	 	}


	 	public function childInfo($id){
	 			$objuser = new User();
	 			return $objuser->get_child_info($id);

	 	}

	 }


 ?>