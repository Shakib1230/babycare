
<?php
session_start();
if (isset($_SESSION['s_email'])) {
 ?>

<?php 
include'header.php';
include '../control/connection.php';
include '../control/childInfoUpdateControler.php';
include '../control/anotherData.php';?>  

<head>
    <body style="background-image: url(../assets/registration_user/-Playing-with-fruits.jpg); background-repeat: no-repeat; background-size: cover;">

<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 250px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 136%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:center">



<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>




<div class="inside-banner">
  <div class="container"> 
    <h2 align="center">Child Info Update</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

  <?php include('errors.php');
          $obj = new AnotherData();
          $result= $obj->childInfo($_GET['id']);
          $row=mysqli_fetch_array($result)
?>

<?php //echo 'childInfoUpdate.php?id='.$id; ?>
 
<form method="POST" action="<?php echo 'childInfoUpdate.php?id='.$_GET['id']; ?>">

                <input type="text" class="form-control" placeholder="Child Name" name="child_name" value="<?php echo $row['children_name'] ?>">
				<input type="text" class="form-control" placeholder="Father Name" name="child_father_name" value="<?php echo $row['children_father_name'] ?>"> 
				<input type="text" class="form-control" placeholder="Mother Name" name="child_mother_name" value="<?php echo $row['children_mother_name'] ?>">
				<input type="number" class="form-control" placeholder="Age" name="age" min="1" max="12"> value="<?php echo $row['age'] ?>">
				<input type="text" class="form-control" placeholder="Mobile Number (+880) " name="phone" value="<?php echo $row['mobile_no'] ?>">   

				<select name="religion" class="form-control">
									<option value="<?php echo $row['religion'] ?>">Religion</option>
									<option value="Muslim">Muslim</option>
									<option value="Hindu">Hindu</option>              
									<option value="Buddhist">Buddhist</option>                 
									<option value="Other">Other</option>               
						<select>				 
                
                <input type="password" class="form-control" placeholder="Password" name="password_1" value="<?php echo $row['password'] ?>">
                <input type="password" class="form-control" placeholder="Confirm your Password" name="password_2">
                <input type="hidden" class="form-control" name="id" value="<?php  echo $_GET['id'] ?>">
                <!-- <textarea rows="6" class="form-control" placeholder="Address" name="address"></textarea> --> 
        
                    <button type="submit" class="btn btn-success" name="reg_user">Update Info</button>
                       
</div>
     

</form>
                
        </div>
  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

 <?php }else {
  header("location: ../view/login_user.php");
} ?>