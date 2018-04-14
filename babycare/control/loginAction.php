
<?php

include '../model/admin.php';
include 'connection.php';

$objUser = new Admin();
$errors = array();




if (isset($_POST['login_user'])) {

  
  $adminEmail = mysqli_real_escape_string($conn, $_POST['adminEmail']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($adminEmail)) { 
        array_push($errors, "Email is required"); 
     } else if (!filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Enter a valid email");
     }


  if (empty($password)) { 
        array_push($errors, "Password is required");
       }

if (count($errors) < 1) {


    $result = $objUser->login_admin($adminEmail,$password);
    $resultCheck= mysqli_num_rows($result);

    if($resultCheck < 1){
      //  header("location: ../view/login_user.php?invalid=user/password");
      array_push($errors, "Result ".$resultCheck);

    }



	else {
    
       
          
          $_SESSION['s_email'] = $adminEmail;

          header("location: ../view/index.php");
  
      }

  }
 else{
  //header("location: ../view/login_user.php?");
}
}


?>

