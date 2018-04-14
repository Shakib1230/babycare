<?php 
	
	include ('connection.php');


	 class User {



		public function register_child($child_Name, $child_father_name, $child_mother_name, $age, $email, $password_1, $phone, $address, $religion){

			$GLOBALS['sql'] = "INSERT INTO children_details (children_name, children_father_name , children_mother_name , age , email, password, mobile_no, address ,religion ) VALUES('$child_Name','$child_father_name' ,'$child_mother_name' , '$age' ,'$email','$password_1','$phone','$address','$religion');";

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function login_user($email,$password){
			$GLOBALS['sql'] ="SELECT * FROM children_details WHERE email ='$email' and password ='$password'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

		

		public function get_child_info($email){
			$GLOBALS['sql'] ="SELECT  *  FROM children_details where email = '$email' " ;
        	return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function get_report($email){
			$GLOBALS['sql'] ="SELECT  *  FROM  	report_or_notice where email = '$email' " ;
			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}


	 }	

 ?>