<?php
	session_start();
	require_once('assets/php/user.php');

	$id = $_SESSION['loginid'];
	$users = new User;
	$row = $users->getSpecificUser($id);

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>User</title>
	

	<meta name="description" content="----">

	<meta name="keywords" content="Premium HTML Template">

	<meta name="author" content="HTMLmate">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css-include -->

	<!-- boorstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- themify-icon.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- light-box -->
	<link rel="stylesheet" type="text/css" href="assets/css/lightbox.css">
	<!-- video css -->
	<link rel="stylesheet" type="text/css" href="assets/css/video.min.css">
	<!-- menu.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- responsive.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>


<body>
	<div id="preloader"></div>
	<!-- Start of nav bar 
		============================================= -->
		<nav id="poppin-nav">
			<div id="nav-off"></div>
			<div id="header-logo-1" class="text-center">
				<a href="#"><img src="assets/img//logo/logo.png" alt="img"></a>
			</div>
			<ul id="menu">
				<li class="has-submenu text-capitalize">
					<a href="index.html">Home</a>
				</li>
				<li><a href="contact.html">Souvenir</a></li>
				<li class="has-submenu"><a href="#">About us</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div id="menu-overlay"></div>
	<!-- End of nav bar 
		============================================= -->



	<!-- Start of header
		============================================= -->
		<header id="site-header" class="not-stuck">
			<div class="container">
				<div class="row">
					<div id="header-logo">
						<a href="#"><img src="assets/img//logo/logo.png" alt="img"></a>
					</div>

					<div id="menu-burger" class="pull-right not-stuck">
						<div id="menu-bar">
							<span class="icon-bar top"></span>
							<span class="icon-bar middle"></span>
							<span class="icon-bar bottom"></span>
						</div>
					</div>
				</div>
			</div>
		</header>
	<!-- End of header
		============================================= -->





	<!-- Start of page head section
		============================================= -->
		<section id="page-head" class="page-head-section">
			<div class="page-head-overlay"></div>
			<div id="page-head-effect" class="page-head-effect">
				<canvas id="demo-canvas"></canvas>
			</div>
			<!-- // page-head-style -->
			<div class="container">
				<div class="row">
					<div class="banner-content">
						<div class="page-head-content">
							<div class="page-head-title text-capitalize pb40">
								<h1>Omiya.jp</h1>
								<a href="index.html">Home</a>
								<span class="descrip">- My Page</span>
							</div>
							<!-- //title -->

							<div class="page-head-social">
								<div  class="social-title text-uppercase">
									<span>menu</span>
								</div>
								<!-- //title -->
								<div class="page-head-social-item ul-li">
									<ul class="page-head-social-list">
										<li><a href="index.html"><span><i class="fas fa-home"></i></span></a></li>
										<li><a href="souvenir.php"><span><i class="fas fa-gifts"></i></span></a></li>
										<li><a href="favorite.html"><span><i class="far fa-heart"></i></span></a></li>
										<li><a href="register.html"><span><i class="far fa-user"></i></span></a></li>
									</ul><!-- /.page-head-social-list -->
								</div><!-- /.page-head-social-item -->
							</div>
							<!-- /.page-head-social -->
						</div>
						<!-- /.page-head-content -->
					</div>
				</div><!--  /.row-->
			</div><!--  /.container -->
		</section>
	<!-- End of page head section
		============================================= -->
<br><br><br><br>

<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="form" action="assets/php/user.php" method="post">
                <h3>Account</h3><br>
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" name="fname" value="<?php echo $row['first_name']; ?>" class="form-control">
                    <label for="">Last name</label>
                    <input type="text" name="lname" value="<?php echo $row['last_name']; ?>" class="form-control">
                    <label for="">Username</label>
                    <input type="text" name="uname" value="<?php echo $row['user_name']; ?>" class="form-control">
                    <label for="">E-mail</label>
                    <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                    <label for="">Password</label>
                    <input type="text" name="pass" value="<?php echo $row['password']; ?>" class="form-control">
                    <br>
                    <button type="submit" name="save" class="btn btn-block btn-warning">SAVE</button>
                </div>
            </div>
		</div>
	
<?php 
if(isset($_POST['save'])){
	$fname = $_POST['uname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	updateUser($id, $fname, $lname, $uname, $email, $pass);
}

?>


        <div class="col-md-6">
            <br><br><br><br><br>
            <button type="submit" name="logout" class="btn btn-block btn-light">Logout</button>
        </div>
    </div>
</div>









	<!-- Start of footer section
		============================================= -->
		<footer>
			<div class="footer-area footer-2">
				<div class="container">
					<div class="row">
						<div class="copy-right-area text-center">
							<div class="page-head-social-item ul-li">
								<ul class="page-head-social-list">
									<li><a href="#"><span class="ti-facebook"></span></a></li>
									<li><a href="#"><span class="ti-twitter-alt"></span></a></li>
									<li><a href="#"><span class="ti-google"></span></a></li>
									<li><a href="#"><span class="ti-instagram"></span></a></li>
								</ul><!-- /.page-head-social-list -->
							</div>
							<span>© puppin 2018 - All Rights Reserved </span>
						</div>
						<!-- //copy-right-area -->
					</div><!--  /.container -->
				</div><!--  /.row-->
			</div><!--  /.footer-area -->
		</footer>
	<!-- End of footer section
		============================================= -->



		<!--  Js Library -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<!-- Include  for bootstrap -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Include isotope Js -->
		<script src="assets/js/jquery.isotope.min.js"></script>
		<!-- Include lightbox -->
		<script src="assets/js/lightbox.js"></script>
		<!-- Include circle-effect.js -->
		<script src="assets/js/circle-effect.js"></script>
		<!-- Include Video js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Include Owl-carousel -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Include Counter up -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>



		<!-- Include script.js -->
		<script src="assets/js/script.js"></script>


	</body>
	</html>