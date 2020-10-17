<?php 

require 'config.php';

$query = mysqli_query($con, "SELECT * FROM daftar_wisata");
$row_query = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Invinity - Aplikasi Daftar Wisata Kota Semarang Berbasis Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-4"><a href="index.html" style="background-image: url(images/bg_1.jpg);">Ayo <span>Wisata</span></a></h1>
				<div class="mb-4">
					<h3>Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-8 py-5 px-md-5">
	    				<div class="row pt-md-4">


			    			<div class="col-md-12">
									<div class="blog-entry ml-5">
										<img src="images/<?php echo $row_query['gambar']?>" width="500" height="200" >
									<!-- 	<a href="single.html" class="img img-2" style="background-image: url(images/img1.jpg);"></a> -->
							  <div class="text text-2 pl-md-4">
				              <h3 class="mb-2 "><a href="single.html"><?php echo $row_query['nama_wisata']?></a></h3>
				              <div class="meta-wrap">
									<p class="meta ">
				              		<span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
				              		<span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
				              		<span><i class="icon-comment2 mr-2"></i>5 Comment</span>
				              	</p>
			              	</div>
				              <p class="mb-4"><?php echo $row_query['deskripsi']?></p>
				            </div>
									</div>
								</div>
					 <div class="row ml-5" >

	               <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.3s">
	                <div class="google_map">
	     			<div class="pl-md-4 ml-5 text-center">
	              	<p class="mb-4"><b>Alamat wisata</b> </br><?php echo $row_query['alamat_wisata']?></p>
	              	<p class="mb-4"><b>Jam Buka - Jam Tutup</b> </br> <?php echo $row_query['jam_buka_dan_tutup']?></p>
	              	<p class="mb-4"><b>Harga Tiket</b> </br> <?php echo $row_query['harga_tiket']?></p>
	              	<p class="mb-4"><b>Alat Transportasi</b> </br><?php echo $row_query['alat_transportasi']?></p>
	              	<p class="mb-4"><b>Rute Perjalanan </b></br><?php echo $row_query['rute_perjalanan']?></p>
	              	</div>

	              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.112916220972!2d110.39618271392762!3d-6.995981070459336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b46faaaaaab%3A0xef7fe551fe13bd76!2sKlenteng%20Sam%20Poo%20Kong%20-%20Semarang!5e0!3m2!1sid!2sid!4v1573365046007!5m2!1sid!2sid" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	            </div>
		        </div>
		      </div>

	         	</div><!-- END-->

	         			<html>
						      <body>
							<div class="container mb-3">
								<h4 align="center" style="margin: 60px 10px 10px 10px;">Komentar</h4><hr>
								<form method="POST" id="form_komen">
									<div class="form-group">
										<input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Masukkan Nama" />
									</div>
									<div class="form-group">
										<textarea name="isi_komentar" id="isi_komentar" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
									</div>
									<div class="form-group">
										<input type="hidden" name="id_komentar" id="id_komentar" value="0" />
										<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
									</div>
								</form>
								<hr>
								<h4 class="mb-3">Komentar :</h4>
								<span id="message"></span>
							   
							   	<div id="display_comment"></div>
							</div>

							<script src="js/jquery.min.js"></script>
							<script>
								$(document).ready(function(){
									$('#form_komen').on('submit', function(event){
										event.preventDefault();
										var form_data = $(this).serialize();
										$.ajax({
											url:"tambah_komentar.php",
											method:"POST",
											data:form_data,
											success:function(data)
											{
												$('#form_komen')[0].reset();
												$('#id_komentar').val('0');
												load_comment();
											}
										})
									});

									load_comment();

									function load_comment()
									{
										$.ajax({
											url:"ambil_komentar.php",
											method:"POST",
											success:function(data)
											{
												$('#display_comment').html(data);
											}
										})
									}

									$(document).on('click', '.reply', function(){
										var id_komentar = $(this).attr("id");
										$('#id_komentar').val(id_komentar);
										$('#pengirim').focus();
									});
								});
							</script>
						</body>
						</html>

				
						<html>
						      <body>
							<div class="container mb-3">
								<h4 align="center" style="margin: 60px 10px 10px 10px;">Review</h4><hr>
								<form method="POST" id="form_review">
									<div class="form-group">
										<input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Masukkan Nama" />
									</div>
									<div class="form-group">
										<textarea name="isi_review" id="isi_review" class="form-control" placeholder="Tulis Review" rows="5"></textarea>
									</div>
									<div class="form-group">
										<input type="hidden" name="id_review" id="id_review" value="0" />
										<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
									</div>
								</form>
								<hr>
								<h4 class="mb-3">Review :</h4>
								<span id="message"></span>
							   
							   	<div id="display_review"></div>
							</div>

							<script src="js/jquery.min.js"></script>
							<script>
								$(document).ready(function(){
									$('#form_review').on('submit', function(event){
										event.preventDefault();
										var form_data = $(this).serialize();
										$.ajax({
											url:"tambah_review.php",
											method:"POST",
											data:form_data,
											success:function(data)
											{
												$('#form_review')[0].reset();
												$('#id_review').val('0');
												load_review();
											}
										})
									});

									load_review();

									function load_review()
									{
										$.ajax({
											url:"ambil_review.php",
											method:"POST",
											success:function(data)
											{
												$('#display_review').html(data);
											}
										})
									}

									$(document).on('click', '.reply', function(){
										var id_review = $(this).attr("id");
										$('#id_review').val(id_review);
										$('#pengirim').focus();
									});
								});
							</script>
						</body>
						</html>


			    	</div>
	    			<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
	            <div class="sidebar-box pt-md-4">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Post</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/img4.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Ayana Gedung Songo</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
	                  	<div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/img3.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Lawang Sewu</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/img9.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Tugu Muda</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a href="#" class="tag-cloud-link">alami</a>
	                <a href="#" class="tag-cloud-link">natural</a>
	                <a href="#" class="tag-cloud-link">manusia</a>
	                <a href="#" class="tag-cloud-link">hutan</a>
	                <a href="#" class="tag-cloud-link">gunung</a>
	                <a href="#" class="tag-cloud-link">laut</a>
	                <a href="#" class="tag-cloud-link">bangunan</a>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img py-4" style="background-image: url(images/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Newsletter</h3>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email Address">
	                  <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Archives</h3>
	              <ul class="categories">
	                <li><a href="#">September 2018 <span>(6)</span></a></li>
	                <li><a href="#">August 2018 <span>(8)</span></a></li>
	                <li><a href="#">July 2018 <span>(2)</span></a></li>
	                <li><a href="#">June 2018 <span>(7)</span></a></li>
	                <li><a href="#">May 2018 <span>(5)</span></a></li>
	              </ul>
	            </div>

	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>