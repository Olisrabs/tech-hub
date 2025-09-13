<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Tech Hub - It Startup and Sass Website HTML5 Template">
	<meta name="keywords"
		content="Startup, agency, user-interface, data-visualization, Modern, innovation, innovative, Marketing, saas, Seo-agency">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Insomniacafe">
	<title>Tech Hub - Startup and Technology Website HTML5 Template.</title>
	<!-- favicon -->
	<link rel="icon" type="image/png" href="assets/img/logo/favicon.ico">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Kurson Css -->
	<link rel="stylesheet" href="assets/css/kursor.css">
	<!-- slick slider css -->
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- Nice select css -->
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<!-- normalize css -->
	<link rel="stylesheet" href="assets/css/normalize.css">
	<!-- modal video css -->
	<link rel="stylesheet" href="assets/css/modal-video.min.css">
	<!-- Sal Animation css -->
	<link rel="stylesheet" href="assets/css/sal.css">
	<!-- swiper slider css -->
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<!-- meanmenu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="page-template">
	<!-- preloader -->
	<div id="preloader" class="inso-preloader">
		<span class="loader"></span>
	</div>
	<!-- preloader end -->

	<!-- header menu -->
	<header class="header"><?php include "menu.php";?></header>
	<!-- header menu end -->

	<!-- breadcrumb -->
	<div class="breadcrumb pt-80 pb-80">
		<div class="container">
			<div class="breadcrumb__vector">
				<img src="assets/img/animated-icon/graph.png" alt="graph">
				<img src="assets/img/animated-icon/star-icon.png" alt="graph">
			</div>
			<div class="breadcrumb__wrapper">
				<div class="breadcrumb__wrapper--text">
					<h5 class="title">Contact Us</h5>
					<p>For businesses with digital products or services,
						ensuring a user-friendly and visually appealing
						interface is vital.</p>
				</div>
				<div class="breadcrumb__wrapper--link">
					<ul aria-label="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb end -->

	<!-- contact us -->
	<div class="contact pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact__single">
						<div class="contact__single--item">
							<div class="icon">
								<i class="fa-solid fa-phone"></i>
							</div>
							<div class="content">
								<h6 class="title">Phone</h6>
								<a href="tel:+8801755202096">+8801755202096</a>
								<a href="mailto:contact@insomniacafe.org">contact@insomniacafe.org</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact__single">
						<div class="contact__single--item">
							<div class="icon">
								<i class="fa-solid fa-location-dot"></i>
							</div>
							<div class="content">
								<h6 class="title">Addres</h6>
								<p>Harinarayanpur, Kushtia Sador</p>
								<p>Khulna, Bangladesh</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact__single">
						<div class="contact__single--item">
							<div class="icon">
								<i class="fa-regular fa-clock"></i>
							</div>
							<div class="content">
								<h6 class="title">Opening Hours</h6>
								<p>Sunday - Thursday</p>
								<p>10.00 am - 06.00 pm</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="contact__form">
					<div class="comment__template contact__template">
						<div class="comment__template--box input__form">
							<form action="https://tf.insomniacafe.org/Tech Hub/mail-sender.php" method="post" class="contact__php">
								<div class="input-group">
									<div class="single-input">
										<label for="name">Full Name</label>
										<input type="text" id="name" name="name" placeholder="Your Name" required="">
									</div>
									<div class="single-input">
										<label for="email">Email Address</label>
										<input type="text" id="email" name="email" placeholder="Your email" required="">
									</div>
								</div>
								<div class="input-group">
									<div class="single-input">
										<label for="phone">Phone Number</label>
										<input type="number" id="phone" name="phone" placeholder="Your Number" required="" min="1">
									</div>
									<div class="single-input">
										<label for="skype">Skype Address</label>
										<input type="text" id="skype" name="skype" placeholder="Your skype">
									</div>
								</div>
								<div class="textarea">
									<label for="msg">Message</label>
									<textarea id="msg" name="msg" placeholder="Your Review" required=""></textarea>
								</div>
								<div class="submit-btn">
									<button type="submit" class="main-btn">Send Message</button>
								</div>
							</form>
							<div class="row">
								<div class="col-12">
									<div class="alert alert-success contact__msg" style="display: none" role="alert">
										Your message was sent successfully.
									</div>
								</div>
							</div>
							<!-- end message -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact us end -->
	<!-- map -->
	<div class="contact__map">
		<div class="container-fluid">
			<div id="map">
				<!-- if you want to use leaflet map just remove <iframe></iframe> -->
				<iframe class="google__map"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212270.5451230493!2d-84.42060395!3d33.7677129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5045d6993098d%3A0x66fede2f990b630b!2sAtlanta%2C+GA!5e0!3m2!1sen!2sus!4v1396981185525">
				</iframe>
			</div>
		</div>
	</div>
	<!-- map end -->

	<!-- footer -->
	<footer class="footer pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Contact Us</h5>
						<div class="footer__widget--contact">
							<ul>
								<li><i class="fa-sharp fa-solid fa-phone"></i><a
										href="tel:+8801755202096">+8801755202096</a></li>
								<li><i class="fa-regular fa-envelope"></i><a
										href="mailto:contact@insomniacafe.org">contact@insomniacafe.org</a></li>
							</ul>
							<div class="footer__social">
								<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
								<a href="#"><i class="fa-brands fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Links</h5>
						<div class="footer__widget--link">
							<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="portfolio.php">Portfolio</a></li>
								<li><a href="career.php">Careers</a></li>
								<li><a href="blog.php">Blog</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Resources</h5>
						<div class="footer__widget--resource">
							<ul>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">User Guide</a></li>
								<li><a href="#">Realease</a></li>
								<li><a href="#">Video tutorial </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h5>Newsletter</h5>
						<div class="footer__widget--newsletter">
							<p>If your business hosts events or exhibitions,
								creative services can assist with event
								planning, booth design.
							</p>
							<form action="#" class="newsletter-box">
								<input type="email" placeholder="Email Address">
								<button type="submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->

	<!-- footer credit -->
	<div class="footer-credit">
		<div class="container">
			<div class="footer-credit--img">
				<a href="index-2.php"><img src="assets/img/logo/footer-logo.svg" alt="footer logo"></a>
			</div>
			<div class="footer-credit__wrapper">
				<div class="copy-right">
					All Rights Reserved <a href="#">Insomniacafe</a>
				</div>
				<div class="footer-links">
					<ul>
						<li><a href="faq.php">Terms of use</a></li>
						<li><a href="faq.php">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- footer credit end -->

	<!-- back to top -->
	<div class="scroll active-scroll">
		<svg class="scroll__circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
				style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 244.073px;">
			</path>
		</svg>
	</div>
	<!-- back to top end -->

	<!-- all jquery plugins here -->
	<!-- jquery -->
	<script src="assets/js/Jquery-3.7.0.js"></script>
	<!-- bootstrap- jquery included -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Kursor- jquery included -->
	<script src="assets/js/kursor.min.js"></script>
	<!-- slick slider- jquery included -->
	<script src="assets/js/slick.min.js"></script>
	<!-- niceselect - jquery included -->
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!-- imageloaded pkgd - jquery included -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- appear - jquery included -->
	<script src="assets/js/appear.min.js"></script>
	<!-- modal video - jquery included -->
	<script src="assets/js/jquery-modal-video.min.js"></script>
	<!-- meamenu - jquery inclued -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- ajax contact form js -->
	<script src="assets/js/ajax-contact.php"></script>
	<!-- ajax contact form js -->
	<script src="assets/js/leaflet-map.php"></script>
	<!-- custom map js -->
	<!-- if you use leaflet map just uncomment down js -->
	<!-- <script src="assets/js/leaflet-custom-map.js"></script> -->
	<!-- Sal - jquery included -->
	<script src="assets/js/sal.js"></script>
	<!-- swiper - jquery included -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>

</html>
