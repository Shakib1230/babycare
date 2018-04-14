
<?php

	include ('connection.php');
	include ('../model/user.php');

	
	class AnotherActionController {


		function get_child_profile_info($email){
				$objUser = new User();
				return  $objUser->get_child_info($email);
		}

		function get_report($email){
				$objUser = new User();
				return  $objUser->get_report($email);
		}


	}


?>
