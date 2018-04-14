<?php 
	
	include ('connection.php');

	 class Admin {

	
		public function register_admin($admin_name, $email, $password_1, $gender, $phone, $address){

			$GLOBALS['sql'] = "INSERT INTO admin_details (admin_name, email , password , gender , phone , address ) VALUES('$admin_name','$email' ,'$password_1' , '$gender' ,'$phone','$address');";

			return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}
		

		public function login_admin($email,$password){
			$GLOBALS['sql'] ="SELECT * FROM admin_details WHERE email ='$email' and password = '$password'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function create_report($email,$catagory,$comment){
			$GLOBALS['sql'] ="INSERT INTO  report_or_notice ( email , catagory , comment ) VALUES('$email' ,'$catagory' , '$comment');";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function check_email($email){
        	$GLOBALS['sql'] ="SELECT * FROM admin_details WHERE email ='$email'";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}
	 }	

 ?>