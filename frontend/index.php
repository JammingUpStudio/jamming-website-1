<?php

  include '../control/koneksi.php';

   session_start();

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
    else $halaman = "index";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="shortcut icon" href="asset_frontend/img/icon.png">
  <title>Jammingup || Studio</title>

  <!-- Bootstrap -->
  <link href="asset_frontend/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset_frontend/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset_frontend/css/animate.css">
  <link rel="stylesheet" href="asset_frontend/css/overwrite.css">
  <link href="asset_frontend/css/animate.min.css" rel="stylesheet">
  <link href="asset_frontend/css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Bikin
    Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="index.html">JAMMINGUP STUDIO</a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?halaman=home"><b>Home</b></a></li>
             <li><a href="index.php?halaman=j.Profile "><b>J.Profile</b></a></li>
            <li><a href=""><b>J.Article</b></a></li>
            <li><a href=""><b>J.Document</b></a></li>
            <li><a href=""><b>About</b></a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>

  <?php

     if ($halaman=='home')
      include 'home.php';
     if ($halaman=='j.Profile')
      include 'profil.php';
  ?>
  <!--/header-->
 
    <!--/#contact-->
    <footer>
   
    <div class="container">
      <div class="sub-footer">
        <div class="text-center">
          <div class="col-md-12">
            <form class="form-inline">
              <div class="form-group">
                <button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Enter Your Email</button>
              </div>
              <div class="form-group">
                <button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Subscribe Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="social-icon">
      <div class="container">
        <div class="col-md-6 col-md-offset-3">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="copyright">
        &copy; Bikin Theme. All Rights Reserved.
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
          -->
         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="asset_frontend/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="asset_frontend/js/bootstrap.min.js"></script>
  <script src="asset_frontend/js/parallax.min.js"></script>
  <script src="asset_frontend/js/wow.min.js"></script>
  <script src="asset_frontend/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="asset_frontend/js/fliplightbox.min.js"></script>
  <script src="asset_frontend/js/functions.js"></script>
  <script src="asset_frontend/contactform/contactform.js"></script>

</body>

</html>
