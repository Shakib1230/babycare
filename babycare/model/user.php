<?php 
	
	include ('connection.php');


	 class User {


		public function register_child($child_Name, $child_father_name, $child_mother_name, $age, $email, $password_1, $phone, $address, $religion){

			$GLOBALS['sql'] = "INSERT INTO children_details (children_name, children_father_name , children_mother_name , age , email, password, mobile_no, address ,religion ) VALUES('$child_Name','$child_father_name' ,'$child_mother_name' , '$age' ,'$email','$password_1','$phone','$address','$religion');";

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function login_user($email){
			$GLOBALS['sql'] ="SELECT * FROM children_details WHERE email ='$email'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function update_info($id, $child_Name, $child_father_name, $child_mother_name, $age, $password_1, $phone, $religion){

			$GLOBALS['sql'] ="UPDATE children_details SET children_name = '$child_Name', children_father_name = '$child_father_name', children_mother_name = '$child_mother_name', age = '$age', password = '$password_1', mobile_no = '$phone', religion ='$religion'   WHERE children_id ='$id'";

			 mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
			 return $GLOBALS["sql"];

		}


		public function check_user_email($email){
        	return  mysqli_query($GLOBALS["conn"], "SELECT * FROM children_details WHERE email ='$email'"); 
		}

		public function get_user_list(){
			$GLOBALS['sql'] ="SELECT  children_id, children_name , children_father_name , age , mobile_no  FROM children_details" ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_child_info($id){
			$GLOBALS['sql'] ="SELECT  children_id, children_name ,children_mother_name, children_father_name , age , mobile_no ,password , religion FROM children_details where children_id = '$id' " ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}


	 }	

 ?>