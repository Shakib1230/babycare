<?php
session_start();
if (!isset($_SESSION['s_email'])) {
 ?>

<!DOCTYPE html>

<?php include ('../control/loginAction.php'); ?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user_login</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/login/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/login/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body style="background-image: url(../assets/image/types-of-child-care.jpg); background-repeat: no-repeat; background-size: cover;">

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Baby care</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Admin <small>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container" >
        <div class="row">

          

          <div class="col-md-4 col-md-offset-4">
             <span class="popuptext" id="myPopup"><?php include('errors.php');?></span>
            <form method="post" id="login" action="login_user.php" class="well">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="adminEmail" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" name="login_user" class="btn btn-default btn-block">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer" style="margin-top: 115px;">
      <p>kazi Babycare &copy; 2018</p>
    </footer>


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/login/js/bootstrap.min.js"></script>
  </body>
</html>

<?php }else {
  header("location: ../view/index.php");
} ?>
