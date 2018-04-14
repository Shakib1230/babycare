<?php
session_start();
if (isset($_SESSION['user_email'])) {
 ?>

<?php include'header.php';?>
<?php include'../control/anotherActionControl.php';?>

<head>

<link href="../assets/login/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/login/css/style.css" rel="stylesheet">
<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
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
    <span class="pull-right"><a href="#">Home</a></span>
    <h2>Child Information</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  
	<!-- ------------- -->
  		<div class="col-md-12"  align="center" style="padding: 20px">
            <!-- Website Overview -->

            <div class="panel panel-default" align="center" style="padding: 20px">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title" >Display Information <span></span></h3>
              </div>
              <div class="panel-body" align="center" style="text-align: left;">
                <div class="row" align="center">

                  <div class="col-md-4" align="center" style="text-align: center; float: center;  height: 200px ; margin-left: 30px; margin-right: 10px">
                    <img src="../assets/image/types-of-child-care.jpg" width="100%" height="200px">
                  </div>
                      <div class="col-md-6" style="text-align: center; margin-left: 10px">

                        
                        <?php

                                
                               $email = $_SESSION['user_email'];

                                $obj = new AnotherActionController();
                                $result = $obj->get_child_profile_info($email);

                              $counter = 1;


                              while ($row=mysqli_fetch_array($result)) { ?>

                                  <div >

                                    <div class="col-md-4">
                                          <p>Name : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left">
                                          <p><?php echo $row['children_name']; ?> </p>
                                    </div>
                                  </div>

                                  <div >

                                    <div class="col-md-4">
                                          <p>Father Name : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p><?php echo $row['children_father_name']; ?> </p>
                                    </div>
                                  </div>


                                  <div >

                                    <div class="col-md-4">
                                          <p>Mother Name : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p><?php echo $row['children_mother_name']; ?> </p>
                                    </div>
                                  </div>


                                  <div >

                                    <div class="col-md-4">
                                          <p>Age : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p><?php echo $row['age']; ?> </p>
                                    </div>
                                  </div>

                                  <div >
                                    <div class="col-md-4">
                                          <p>Relagious : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p><?php echo $row['religion']; ?> </p>
                                    </div>
                                  </div>

                                  <div>
                                    <div class="col-md-4">
                                          <p>Mobile No : </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p><?php echo $row['mobile_no']; ?> </p>
                                    </div>
                                  </div>

                                  <div >
                                    <div class="col-md-4">
                                          <p>Address </p>
                                    </div>
                                    <div class="col-md-8" style="text-align: left;">
                                          <p><?php echo $row['address']; ?> </p>
                                    </div>
                                  </div>
                      

                           <?php } ?>

                      </div>
                </div>
                <br>


                    
              </div>
              </div>

   </div>
 

                
<!-- ------------- -->
  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

 <?php } else {
  header("location: ../view/login_user.php");
} ?>