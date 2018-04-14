<?php
session_start();
if (isset($_SESSION['user_email'])) {
 ?>

<?php include'header.php';?>
<?php include'../control/anotherActionControl.php';?>

<head>
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



<!-- ------------- -->
        <div  align="center" style="padding: 50px">
            <!-- Website Overview -->
            <div class="panel panel-default" align="center" style="padding: 20px">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title" >Report </h3>
              </div>
              <div class="panel-body" align="center">
                
                <br>

                    <table class="table table-striped table-hover" >
                      <tr>
                        <th>No</th>
                        <th>Report Type</th>
                        <th>About</th>
                      </tr>
                      <?php
                               $email = $_SESSION['user_email'];
                               $obj = new AnotherActionController();
                               $result = $obj->get_report($email);
                               $counter = 1;

                              while ($row=mysqli_fetch_array($result)) { ?>
                                      <tr>
                                        <td><?php echo $counter++; ?></td>
                                        <td><?php echo $row['catagory']; ?></td>
                                        <td><?php echo $row['comment']; ?></td>
                                      </tr>
                      <?php } ?>
                    </table>
              </div>
              </div>

   </div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">

  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

 <?php } else {
  header("location: ../view/login_user.php");
} ?>