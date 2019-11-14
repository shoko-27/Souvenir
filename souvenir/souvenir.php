<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Souvenir</title>


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
							<span class="descrip"> - Souvenir</span>
						</div>
						<!-- //title -->

						<div class="page-head-social">
							<div class="social-title text-uppercase">
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




	<!-- Start of portfolio section
		============================================= -->
	<section id="portfolio" class="portfolio-section">





		<div class="container">
			<div class="row">
				<div class="portfolio-content">
					<div class="portfolio-tab pb55">
						<div id="filters" class="button-group pb45">
							<div class="col-md-6 float-left">
								<button class="tab-button active" data-filter="*">All<span>75</span></button>
								<button class="tab-button" data-filter=".web">Food<span>14</span></button>
								<button class="tab-button" data-filter=".design">Sweet<span>06</span></button>
								<button class="tab-button" data-filter=".branding">Clothe<span>22</span></button>
								<button class="tab-button" data-filter=".photography">Goods<span>03</span></button>
							</div>
							<div class="col-md-6 float-right text-right">
								<select name="place" id="place">
									<?php
									$place = array('All area','Hokkaido', 'Aomori', 'Iwate', 'Miyagi', 'Akita', 'Yamagata', 'Fukushima', 'Ibaraki', 'Tochigi', 'Gunma', 'Saitama', 'Chiba', 'Tokyo', 'Kanagawa', 'Niigata', 'Toyama', 'Ishikawa', 'Fukui', 'Yamanashi', 'Nagano', 'Gifu', 'Shizuoka', 'Aichi', 'Mie', 'Shiga', 'Kyoto', 'Osaka', 'Hyogo', 'Nara', 'Wakayama', 'Tottori', 'Shimane', 'Okayama', 'Hitoshima', 'Yamaguchi', 'Tokushima', 'Kagawa', 'Ehime', 'Kochi', 'Fukuoka', 'Saga', 'Nagasaki', 'Kumamoto', 'Oita', 'Miyazaki', 'Kagoshima', 'Okinawa');

									foreach ($place as $place) {
										print('<option value = "' . $place . '">' . $place . '</option>');
									}
									?>
								</select>
							</div>
						</div>
						<!-- /tab-button -->

						<div class="portfolio-tab-text-pic row">
							<div id="posts">
								<div id="1" class="item item-grid web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-1.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-1.jpg" data-lightbox="roadtrip"><span class="ti-fullscreen"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">Branding, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>
									</div>
								</div>
								<!-- /item -->

								<div id="2" class="item item-grid design branding">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-2.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-2.jpg" data-lightbox="roadtrip"><span class="ti-fullscreen"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">web, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="3" class="item item-grid design web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-3.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-3.jpg" data-lightbox="roadtrip"><span class="ti-fullscreen"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">design, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="4" class="item item-grid design photography web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-5.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-5.jpg" data-lightbox="roadtrip"><span class="ti-link"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">Branding, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="5" class="item item-grid design web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-4.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a class="popup zoom-gallery" href="https://www.youtube.com/watch?v=_kqQDCxRCzM"><span class="ti-control-forward"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">travel, </a></li>

														<li><a href="#">place</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="6" class="item item-grid design branding web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-6.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-6.jpg" data-lightbox="roadtrip"><span class="ti-link"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">identity, </a></li>

														<li><a href="#">institute</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="7" class="item item-grid design branding web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-7.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-7.jpg" data-lightbox="roadtrip"><span class="ti-fullscreen"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">Branding, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="8" class="item item-grid design branding web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-9.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a class="popup" href="https://www.youtube.com/watch?v=QJO3ROT-A4E&list=PLxdmSpdkY-5LG9ZYDrX3qQq_iqsjfJhx9"><span class="ti-control-forward"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">html, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->

								<div id="9" class="item item-grid design branding web">
									<div class="item-wrap">
										<div class="work-item">
											<div class="work-pic">
												<img src="assets/img/portfolio/port-8.jpg" alt="image">
											</div>
											<!-- //img -->
											<div class="hover-content">
												<div class="hover-text text-center">
													<a href="assets/img/portfolio/port-8.jpg" data-lightbox="roadtrip"><span class="ti-fullscreen"></span></a>
												</div>
												<!-- //light-box-img -->
												<div class="project-description text-uppercase ul-li">
													<h3><a href="#">project Item Title</a></h3>
													<ul class="project-catagorry text-capitalize">
														<li><a href="#">Branding, </a></li>

														<li><a href="#">Development</a></li>
													</ul>
												</div>
												<!-- //project-description -->
											</div>
										</div>

									</div>
								</div>
								<!-- /item -->


							</div>
							<!--//posts-->
						</div>
						<!--//portfolio-tab-text-pic-->
					</div>
					<!--//portfolio-tab-->


					<!-- <div class="poppin-more text-uppercase text-center">
							<div class="more-btn">
								<a href="#">MORE SEARCH</a>
							</div>
						</div> -->
					<!-- //.more -->

				</div>
				<!--//portfolio-content -->
			</div><!--  /.row -->
		</div><!--  /.conatiner -->
	</section>
	<!-- End of portfolio section
		============================================= -->











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