<?php
session_start();
error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
	echo "<script>
			alert('Anda Bukan Admin!');
			window.location.href='../login.php'
			</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Semeru</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <script src="../js/modernizr.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?page=default">BOOKING PENDAKIAN SEMERU</a>
        </div>
		<div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?page=default">HOME</a></li>
            <li><a href="<?php $status = $_SESSION['level']; if($status != 'superadmin') { echo "#";} 
			else { echo "index.php?page=user";}?>">USER</a></li>
            <li class="dropdown">
              <a href="index.php?page=#" class="dropdown-toggle" data-toggle="dropdown">BOOKING<b class="caret"></b></a>
              <ul class="dropdown-menu">
				<li><a href="index.php?page=booking">Data Booking </a></li>
				<li><a href="index.php?page=kuota">Kuota</a></li>
              </ul>
            </li>
			<li><a href="index.php?page=add_booking">Tambah Booking</a></li>
			<li><a href="index.php?page=logout">LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
        


	<div id="headerwrap">
	    <div class="container">
			<div class="row" id="isipage">
				<div class="col-md-12 ">
				<?php include_once "page.php"; ?>		
				</div>
				 
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	 <footer class="footer"> 
    <!-- Footer Top Section Start -->
    
    <!-- Footer Top Section End -->
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="copy-right">
                        <p>
                            Copyright 2020 © <span><a href="#">Taman Nasional Bromo Tengger Semeru</a>
                            <span style="padding-left: 25px;">
                                <span class="change-languange active" style="color: #000; cursor: pointer;" data-language="id">Indonesia</span> |
                                <span class="change-languange " style="color: #000; cursor: pointer;" data-language="uk">English</span>
                            </span>
                        </span></p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  <script src="../js/retina-1.1.0.js"></script>
  <script src="../js/jquery.hoverdir.js"></script>
  <script src="../js/jquery.hoverex.min.js"></script>
  <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>
