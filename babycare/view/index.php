<?php
session_start();
if (isset($_SESSION['s_email'])) {
 ?>

<!DOCTYPE html>

<?php include ('../control/loginAction.php'); ?>

<?php include ('errors.php'); ?>
<?php include ('header.php'); ?>

  
 
  	<body style="background-image: url(../assets/image/images-1.jpg); background-repeat: no-repeat; background-size: cover;">


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
            <h1 class="text-center" style="color: white">HEllo Admin </small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main" >
      <div class="container" style="background-image: url(../assets/images-1.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="row">


        </div>
      </div>
    </section>


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/login/js/bootstrap.min.js"></script>
  </body>
</html>

<?php }else {
  header("location: ../view/login_user.php");
} ?>
