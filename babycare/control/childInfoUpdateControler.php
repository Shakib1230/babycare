
<?php

	include ('connection.php');
	require_once ('../model/user.php');

	

	  $errors = array();
    	if (isset($_POST['reg_user'])) {


		$child_Name = mysqli_real_escape_string($conn, $_POST['child_name']);
		$child_father_name = mysqli_real_escape_string($conn, $_POST['child_father_name']);
		$child_mother_name = mysqli_real_escape_string($conn, $_POST['child_mother_name']);
		$age = mysqli_real_escape_string($conn, $_POST['age']);

		
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		$religion= mysqli_real_escape_string($conn, $_POST['religion']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
       
		if (empty($Age<0)) { 
				array_push($errors, "Invalid Age");

			}

		if (empty($child_Name)) { 
				array_push($errors, "Child name is required");
			}
		if (empty($child_father_name)) {
				array_push($errors, "Father name is required");
			}
		if (empty($child_mother_name)) { 
				array_push($errors, "Mother name is required");
		}



		 if (empty($password_1)) { 
		 		array_push($errors, "Password is required");
     	 }  else if ($password_1 != $password_2) {
  	     		array_push($errors, "The two passwords do not match");
    	 }  else if(strlen($password_1) < 6){
				array_push($errors, "The password length must be > 5");
		 }



  		if (empty($password_2)) {
				array_push($errors, " fill up confirm your password");
  		  }

  		if (empty($phone)) {
				array_push($errors, "phone is required");
	  	}  else if(strlen($phone) != 10) {
				array_push($errors, "The Mobile_No length must be 10");
		} 
  

// Call 
	  	$objUser = new User();
		

		if (count($errors) == 0) {
          
			$result = $objUser->update_info($_POST['id'], $child_Name, $child_father_name, $child_mother_name, $age, $password_1, $phone,  $religion);  
			if($result == true)
             array_push($errors, "Data Update Successfully ".$result);
   			else{
   				array_push($errors, "Data Not Update Successfully" );
   			} 

			}  

        }



?>
