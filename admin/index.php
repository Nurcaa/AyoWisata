<?php
session_start();
//koneksi ke data base

$db = new mysqli("localhost", "root", "", "db_ayowisata");


if (!isset($_SESSION['admin'])) {
    echo "<script> alert('login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();

}


?>  


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ayowisata</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
              <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> Last access : 30 November 2019 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=daftarwisata"><i class="fa fa-dashboard fa-3x"></i> Daftar Wisata</a></li>
                    <li><a href="index.php?halaman=komentar"><i class="fa fa-dashboard fa-3x"></i> Komentar</a></li>
                    <li><a href="index.php?halaman=review"><i class="fa fa-dashboard fa-3x"></i> Review</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i>Logout</a></li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                        
                    if ($_GET['halaman']=="daftarwisata") 
                    {
                        include 'daftarwisata.php';
                    }
                    elseif ($_GET['halaman']=="tambahwisata") {
                        include 'tambahwisata.php';
                    }
                    elseif ($_GET['halaman']=="hapuswisata") {
                        include 'hapuswisata.php';
                    }
                    elseif ($_GET['halaman']=="detail") {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="editwisata") {
                        include 'editwisata.php';
                    }
                    elseif ($_GET['halaman']=="logout") {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="komentar") {
                        include 'komentar.php';
                    }
                    elseif ($_GET['halaman']=="editkomentar") {
                        include 'editkomentar.php';
                    }
                    elseif ($_GET['halaman']=="hapuskomentar") {
                        include 'hapuskomentar.php';
                    }
                    elseif ($_GET['halaman']=="detailkomentar") {
                        include 'detailkomentar.php';
                    }
                    elseif ($_GET['halaman']=="tambahkomentar") {
                        include 'tambahkomentar.php';
                    }
                    elseif ($_GET['halaman']=="review") {
                        include 'review.php';
                    }
                    elseif ($_GET['halaman']=="editreview") {
                        include 'editreview.php';
                    }
                    elseif ($_GET['halaman']=="hapusreview") {
                        include 'hapusreview.php';
                    }
                    elseif ($_GET['halaman']=="detailreview") {
                        include 'detailreview.php';
                    }
                    elseif ($_GET['halaman']=="tambahreview") {
                        include 'tambahreview.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
