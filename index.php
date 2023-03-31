<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Victoria Hills</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/slick-slider/slick.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">


</head>

<body>
	<input type="hidden" id="utm_source" name="utm_source" value="<?php echo !empty($_REQUEST['utm_source'])?$_REQUEST['utm_source']:'' ?>">
	<input type="hidden" id="utm_medium" name="utm_medium" value="<?php echo !empty($_REQUEST['utm_medium'])?$_REQUEST['utm_medium']:'' ?>">
	<input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo !empty($_REQUEST['utm_campaign'])?$_REQUEST['utm_campaign']:'' ?>">
	<input type="hidden" id="utm_term" name="utm_term" value="<?php echo !empty($_REQUEST['utm_term'])?$_REQUEST['utm_term']:'' ?>">
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center">

			<a href="index.html" class="logo me-auto"><img src="assets/img/victorialogo.png" alt="" class="img-fluid"></a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto" href="#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="#overview">Overview</a></li>
					<li><a class="nav-link scrollto" href="#plots">Plots</a></li>
					<li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
					<li><a class="nav-link scrollto" href="#villas">Villas</a></li>
					<li><a class="nav-link scrollto" href="#connectivity">Connectivity</a></li>
					<li><a class="nav-link scrollto" href="#contactUs">Contact Us</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<main id="main">
		<section class="videoSection" id="#hero">
			<video autoplay="" muted="" loop="" id="myVideo">
				<source src="assets/img/desktop-video.mp4" class="d-none d-md-block" type="video/mp4">
				<source src="assets/img/mobile-video.mp4" class="d-block d-md-none" type="video/mp4">
			</video>
		</section>

		<section class="overview" id="overview">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>VICTORIA HILLS</h2>
					<p>TIMELESS LIFESTYLE AWAITS YOU</p>
					<img src="assets/img/heading-img/heading-element.png" alt="" class="img-fluid">
				</div>

				<div class="overviewContent">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<p class="m-0 text-center">What if we offered you an address that combines the peace and calm of Karjat with the eternal beauty of the Victorian Era? <b>Welcome to Victoria Hills</b>, a vast expanse of land set amidst serene surroundings and lofty hills. Victoria Hills evokes a euphoric feeling as you witness the confluence of the timeless Victorian era and the timeless beauty of Karjat. Every element, piece of architecture and structure is finely crafted with the Victorian era in mind. Here you don't have to live with a timestamp as Victoria Hills gives you a chance to live a Timeless Lifestyle.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid overviewImgBoxWrapper">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="overviewImgBox">
							<img src="assets/img/overview-img/01.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="overviewImgBox">
							<img src="assets/img/overview-img/02.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="overviewImgBox">
							<img src="assets/img/overview-img/03.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="overviewImgBox">
							<img src="assets/img/overview-img/04.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="plots creamBg" id="plots">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>PLOTS</h2>
					<p>TIMELESS HABITAT</p>
					<img src="assets/img/heading-img/plot-element.png" alt="" class="img-fluid">
				</div>

				<div class="commonLayout">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-2">
							<img src="assets/img/plot/1.jpg" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6 order-lg-1">
							<div class="smallImgWrapper d-flex flex-wrap gap-2">
								<div class="img">
									<img src="assets/img/plot/2.jpg" class="img-fluid" alt="">
								</div>
								<div class="img">
									<img src="assets/img/plot/3.jpg" class="img-fluid" alt="">
								</div>
								<div class="img">
									<img src="assets/img/plot/4.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="commonLayoutContent right position-relative">
								<h2>Escape to Your Own Slice of Paradise</h2>
								<p>Discover Our Beautiful Scenic Plots and Build Your Dream Home Today! With stunning views and a tranquil atmosphere, our plots offer the perfect canvas to create your own haven away from the city. Whether you're looking for a weekend getaway or a permanent residence, our plots cater to all your needs and preferences. Don't miss out on this once-in-a-lifetime opportunity!</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		</section>

		<section class="siteLayout creamBg" id="siteLayout">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2><span>Site</span> Layout</h2>
					<img src="assets/img//heading-img/siteLayout.png" alt="" class="img-fluid">
				</div>

				<div class="sitemap">
					<a href="assets/img/sitemap-big.jpg" class="sitemapImg">
						<img src="assets/img/sitemap.jpg" class="img-fluid" alt="">
					</a>
				</div>
			</div>
		</section>

		<section class="gallery" id="gallery">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>GALLERY</h2>
					<p>TIMELESS OPULENCE</p>
					<img src="assets/img//heading-img/plot-element.png" alt="" class="img-fluid">
				</div>
			</div>

			<div class="gallerySlider">
				<div class="item">
					<div class="itemBox position-relative">
						<img src="assets/img/gallery/1.jpg" alt="" class="img-fluid">
						<div class="itemBoxContent">
							<h3>VICTORIAN ERA</h3>
							<p>The Victorian era was a time that gave us boundless monumental structures, an artistic approach towards life. and on experience that hos transcended through generations. An era that has stayed timeless with its eternal appeal.</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="itemBox position-relative">
						<img src="assets/img/gallery/1.jpg" alt="" class="img-fluid">
						<div class="itemBoxContent">
							<h3>VICTORIAN ERA</h3>
							<p>The Victorian era was a time that gave us boundless monumental structures, an artistic approach towards life. and on experience that hos transcended through generations. An era that has stayed timeless with its eternal appeal.</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="itemBox position-relative">
						<img src="assets/img/gallery/1.jpg" alt="" class="img-fluid">
						<div class="itemBoxContent">
							<h3>VICTORIAN ERA</h3>
							<p>The Victorian era was a time that gave us boundless monumental structures, an artistic approach towards life. and on experience that hos transcended through generations. An era that has stayed timeless with its eternal appeal.</p>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="itemBox position-relative">
						<img src="assets/img/gallery/1.jpg" alt="" class="img-fluid">
						<div class="itemBoxContent">
							<h3>VICTORIAN ERA</h3>
							<p>The Victorian era was a time that gave us boundless monumental structures, an artistic approach towards life. and on experience that hos transcended through generations. An era that has stayed timeless with its eternal appeal.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="villas creamBg" id="villas">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>VILLAS</h2>
					<p>TIMELESS HABITAT</p>
					<img src="assets/img//heading-img/plot-element.png" alt="" class="img-fluid">
				</div>

				<div class="commonLayout">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<img src="assets/img/plot/1.jpg" class="img-fluid" alt="">
						</div>
						<div class="col-lg-6">
							<div class="smallImgWrapper d-flex flex-wrap gap-2">
								<div class="img">
									<img src="assets/img/plot/2.jpg" class="img-fluid" alt="">
								</div>
								<div class="img">
									<img src="assets/img/plot/3.jpg" class="img-fluid" alt="">
								</div>
								<div class="img">
									<img src="assets/img/plot/4.jpg" class="img-fluid" alt="">
								</div>
							</div>
							<div class="commonLayoutContent left position-relative">
								<p>The Villas at Victoria Hills are available in 2BHK, 3BHK and 4BHK configurations, providing ample space for comfortable living. </p>
								<p>Each Villa is designed to reflect the grandeur of the Victorian era while also incorporating modern amenities to cater to contemporary living. The villas are set admist serene surroundings and lofty hills, providing a perfect blend of nature and luxury. With its timeless elegance, expectional craftmanship, and idyllic location. Victoria Hills is a true gem that promises to offer a lifestyle a unparralled luxury and tranquility.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="connectivity" id="connectivity">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>CONNECTIVITY</h2>
					<p>TAKES YOU EVERYWHERE</p>
					<img src="assets/img//heading-img/plot-element.png" alt="" class="img-fluid">
				</div>

				<div class="overviewContent">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<p class="m-0 text-center">Victoria Hills is seamlessly connected to major parts of the location, providing you with a feeling of security. Whether you are traveling by rail or road. you can easily access your needs while still finding peace in seclusion..</p>
						</div>
					</div>
				</div>

				<div class="connectivityMap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15082.32467709063!2d72.8954382!3d19.0821438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7cc87cc8ca5%3A0x7734f91b7b4c3f77!2sFirst%20Economy%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1680176921502!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>

		<section class="touristDestination pt-0" id="touristDestination">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>Prominent Tourist Destinations In Vicinity</h2>
					<img src="assets/img//heading-img/plot-element.png" alt="" class="img-fluid">
				</div>

				<div class="touristDestinationWrapper parent">
					<div class="tours div1">
						<img src="assets/img/destination/1.jpg" alt="" class="img-fluid">
						<div class="toursContent">
							<p>Sonalpada Dam</p>
						</div>
					</div>
					<div class="tours div2">
						<img src="assets/img/destination/2.jpg" alt="" class="img-fluid">
						<div class="toursContent">
							<p>Kothligad Fort</p>
						</div>
					</div>
					<div class="tours div3">
						<img src="assets/img/destination/3.jpg" alt="" class="img-fluid">
						<div class="toursContent">
							<p>Bhimashankar Wildlife Reserve</p>
						</div>
					</div>
					<div class="tours div4">
						<img src="assets/img/destination/4.jpg" alt="" class="img-fluid">
						<div class="toursContent">
							<p>ND's Film Studio</p>
						</div>
					</div>
					<div class="tours div5">
						<img src="assets/img/destination/5.jpg" alt="" class="img-fluid">
						<div class="toursContent">
							<p>Pandava Caves</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="aboutUs creamBg" id="aboutUs">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2><span>ABOUT</span> GREENCITY</h2>
					<p>WISH TO LIVE A LIFE FULL OF SERENITY</p>
					<img src="assets/img//heading-img/plot-element.png" alt="" class="img-fluid">
				</div>

				<div class="aboutUsContent text-center">
					<p>Greencity India Is a Leading Weekend Home Developer That Provides Plotted Development around Mumbai, At Picturesque Locations. Since Its Beginning, Greencity India Has Redefined Weekend Home Development And Infrastructures, Creating State-of-the-art Gated Plotted Communities. We are On A Journey Of Providing Residential Solutions That Enhance The Quality Of Life. We Offer Premium Villas And Residential NA Plots At Strategic Locations, With Excellent Connectivity.</p>
					<p>We provide a space for your spirit to thrive and tranquilly to flourish for you. We provide an atmosphere that restores the natural balance of life and is created for your overall well-being as a greenway away from the city. Our specialists’ well-thought-out design focuses on creating a living place. We don’t simply build houses; we build communities where you can live your life to the fullest. All of our inventions include cutting-edge technology and are priced to fit your budget.</p>
					<p>Our vision is to be the most customer-centric and top-of-mind home brand in India. Our fundamental principle, with a decades- long legacy, is heavily affected by ethics, honesty, and integrity in all parts of our organisation.</p>
				</div>

				<div class="row mt-5 justify-content-center">
					<div class="col-md-3">
						<div class="counterBox text-center">
							<h3><span>6</span>+</h3>
							<p>Weekend Home Projects</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="counterBox text-center">
							<h3><span>80</span>+</h3>
							<p>Happy Customers</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="counterBox text-center">
							<h3><span>100</span>+</h3>
							<p>Satisfaction Rate</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contactUs" id="contactUs">
			<div class="container">
				<div class="commonHeading d-flex flex-column justify-content-center align-items-center">
					<h2>GET IN TOUCH</h2>
					<img src="assets/img//heading-img/heading-element.png" alt="" class="img-fluid">
				</div>

				<div class="row justify-content-center">
					<div class="col-md-10">
						<form action="" class="row">
							<div class="col-md-6 mb-4">
								<input autocomplete="off" type="text" class="form-control capture" placeholder="Name*" name="name3" id="name3" required="">
								<div class="error_msg error" id="name3_error">Please Enter Your Name</div>
							</div>

							<div class="col-md-6 mb-4">
								<input autocomplete="off" type="email" class="form-control capture" placeholder="Email ID*" name="email3" id="email3" required="">
								<div class="error_msg error" id="email3_error">Please Enter Your Email</div>
							</div>

							<div class="col-md-6 mb-4">
								<input autocomplete="off" type="tel" class="form-control capture" placeholder="Mobile No*" name="mobile3" id="mobile3" required="" onkeypress="return alpha(event)" maxlength="10">
								<div class="error_msg error" id="mobile3_error">Please Enter Your Mobile Number</div>
							</div>

							<div class="col-md-6 mb-4">
								<textarea id="message3" name="message3" rows="1" placeholder="Message"></textarea>
							</div>

							<div class="text-center ">
								<button class="btn btn-default" type="submit" id="form3">
									<span>Submit</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container ">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="row justify-content-between align-items-center">
							<div class="col-md-6">
								<img src="https://via.placeholder.com/150x90" class="img-fluid" alt="">
							</div>
							<div class="col-md-6">
								<div class="siteAdrressBlock">
									<p><strong>Site Address - </strong> Shingdhol, Karjat</p>
									<p><strong>Office Address - </strong> G-4 Ground Floor, A-Wing, Dev Corpora, Opp. To Cadbury Junction, Thane (W)-400601</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container ">
				<div class="copyright d-flex">
					<div class="left">
						Copyright &copy; 2023. All Rights Reserved by Victoria Hills.
					</div>
					<div class="right">
						Designed & Developed by <a href="https://firsteconomy.com/" target="_blank">First Economy</a>
					</div>

				</div>
			</div>
		</div>
	</footer><!-- End Footer -->

	<div class="sidebar-contact">
		<div class="toggle"></div>
		<h2>Enquire Now</h2>
		<form autocomplete="off" class="lead_form" method="POST">
			<div class="rows">
				<div class="col-12">
					<input autocomplete="off" type="text" class="form-control capture" placeholder="Name*" name="name2" id="name2" required="">
					<div class="error_msg error" id="name2_error">Please Enter Your Name</div>
				</div>
				<div class="col-12">
					<input autocomplete="off" type="tel" class="form-control capture" placeholder="Mobile No*" name="mobile2" id="mobile2" required="" onkeypress="return alpha(event)" maxlength="10">
					<div class="error_msg error" id="mobile2_error">Please Enter Your Mobile Number</div>
				</div>
				<div class="col-12">
					<input autocomplete="off" type="email" class="form-control capture" placeholder="Email ID*" name="email2" id="email2" required="">
					<div class="error_msg error" id="email2_error">Please Enter Your Email</div>
				</div>
				<div class="col-12">
					<textarea id="message2" name="message2" rows="3" placeholder="Message"></textarea>
				</div>

				<div class="text-center">
					<button class="btn btn-default" type="submit" id="form2">
						<span>Submit</span>
					</button>
				</div>
			</div>
		</form>
	</div>

	<!--pop Model -->
	<div id="popup-modalForm" class="modal fade" aria-modal="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="modal-body">
					<h2>Enquire Now</h2>
					<form autocomplete="off" class="lead_form" method="POST">
						<div class="col-12">
							<input autocomplete="off" type="text" class="form-control capture" placeholder="Name*" name="name1" id="name1" required="">
							<div class="error_msg error" id="name1_error">Please Enter Your Name</div>
						</div>
						<div class="col-12">
							<input autocomplete="off" type="tel" class="form-control capture" placeholder="Mobile No*" name="mobile1" id="mobile1" required="" onkeypress="return alpha(event)" maxlength="10">
							<div class="error_msg error" id="mobile1_error">Please Enter Your Mobile Number</div>
						</div>
						<div class="col-12">
							<input autocomplete="off" type="email" class="form-control capture" placeholder="Email ID*" name="email1" id="email1" required="">
							<div class="error_msg error" id="email1_error">Please Enter Your Email</div>
						</div>
						<div class="col-12">
							<textarea id="message1" name="message1" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="text-center">
							<button class="btn btn-default" type="submit" id="form1"> <span>Submit</span> </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="preloader">
		<video width="320" height="240" autoplay="" loop="" muted playsinline="">
			<source src="assets/img/preloader.mp4" type="video/mp4">
		</video>
	</div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
		<i class="bi bi-arrow-up-short"></i>
	</a>

	<!-- Vendor JS Files -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/slick-slider/slick.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/ajax-contact.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/custom.js"></script>

</body>

</html>
