<?php include'header.php';?>
<?php include'../control/connection.php';?>
<?php include ('../control/anotherData.php');?>

<?php
session_start();
if (isset($_SESSION['s_email'])) {
 ?>

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
    <span class="pull-right"><a href="#">Home</a> / Registration</span>
    <h2>Registration</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  
	<!-- ------------- -->
  		<div  align="center" style="padding: 20px">
            <!-- Website Overview -->
            <div class="panel panel-default" align="center" style="padding: 20px">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title" >Admin</h3>
              </div>
              <div class="panel-body" align="center">
                
                <br>

                    <table class="table table-striped table-hover" >
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Father Name Type</th>
                        <th>Phone No</th>
                      </tr>
                      <?php
                              $obj = new AnotherData();
                              $result= $obj->childList();
                              $counter = 1;

                              while ($row=mysqli_fetch_array($result)) { ?>
                                      <tr>
                                        <td><?php echo $counter++; ?></td>
                                        <td><?php echo $row['children_name']; ?></td>
                                        <td><?php echo $row['age']; ?></td>
                                        <td> <?php echo $row['children_father_name']; ?></td>
                                        <td> <?php echo $row['mobile_no']; ?></td>
                                        <td><a class="btn btn-default" href="<?php echo 'childProfile.php?id='.$row['children_id'] ?>">View </a> <a class="btn btn-default" href="<?php echo 'childinfoupdate.php?id='.$row['children_id'] ?>">Edit</a> <a class="btn btn-default" href="#">Delete</a></td>
                                      </tr>
                      <?php } ?>
                    </table>
              </div>
              </div>

   </div>
 

                
<!-- ------------- -->
  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

 <?php }else {
  header("location: ../view/login_user.php");
} ?>