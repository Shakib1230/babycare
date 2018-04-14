<?php
session_start();
if (isset($_SESSION['s_email'])) {
 ?>

<?php include'header.php';?>
<?php include'../control/reportControl.php';?>

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




<div class="inside-banner">
  <div class="container"> 
    <h2>Report</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

    <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>
 
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ;?>">

                <input type="text" class="form-control" placeholder="Id" name="id">  
                <input type="text" class="form-control" placeholder="Email" name="email"> 
            
                <select name="catagory" class="form-control">
                            <option value="catagory">Catagory</option>
                            <option value="medical report">Medical report</option>
                            <option value="complain report">Complain report</option>
                            <option value="holiday notice">Holiday notice</option>
                            <option value="other">Other</option>              
                <select>            
               
                <textarea rows="6" class="form-control" placeholder="Comment" name="comment"></textarea> 
        
                    <button type="submit" class="btn btn-success" name="reg_user">Submit</button>
     

</form>
                
        </div>
  
</div>
</div>
</div></body>

<?php include'footer2.php';?>

 <?php } else {
  header("location: ../view/login_user.php");
} ?>