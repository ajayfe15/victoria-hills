<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Victoria Hills | Thank You</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="shortcut icon" href="./favicon.ico" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<style>
		.thankyoubg {
			background: #C69651 !important;
			margin: 0;
			padding: 0;
		}

		.thankyoumain {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			width: 100%;
			height: 100vh;
		}

		.thankyou {
			width: 500px;
			margin: auto;
			padding: 30px;
			background: #ffffff;
			text-align: center;
			border-radius: 7px;
			color: #000;
			font-family: 'Poppins', sans-serif;
		}

		.thankyoulogo {
			width: 220px;
			margin: 0 auto;
			padding: 0;
		}

		.thankyoulogo img {
			margin-bottom: -7px;
			width: auto;
			max-height: 120px;
		}

		.thankyouicon {
			width: 80px;
			margin: 0 auto;
			padding: 15px 0 30px 0;
		}

		.thankyouicon img {
			width: 100%;
			margin-bottom: -7px;
		}

		.thankyoutext {
			width: 80%;
			margin: 0 auto;
			text-align: center;
			line-height: 26px;
			color: #000;
		}

		.thankyoulink {
			width: 100%;
			padding: 20px 0;
			font-size: 28px;
			line-height: 30px;
			font-weight: 900;
		}

		.thankyoutext h3 {
			font-weight: 900;
			font-size: 30px;
			text-transform: uppercase;
			line-height: 30px;
			padding: 25px 0 10px 0;
			color: #000;
		}

		.thankyoutext p {
			color: #000;
		}

		.contactsocial i {
			line-height: 36px;
			text-align: center;
			color: #000;
			font-size: 30px;
			margin: 0 5px;
		}

		.thankyoulink a {
			color: #fff;
		}

		.thankyoulink a:hover {
			color: #fff;
		}

		.download-brochure {
			text-transform: uppercase;
			margin-top: 0px;
			display: inline-flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			gap: 5px;
			color: #000;
			font-size: 12px;
			font-weight: 700;
			padding: 8px 25px;
			border-radius: 0;
			text-transform: capitalize;
			background-color: #C69651;
			border: 1px solid #C69651;
			-webkit-transition: all 0.2s linear;
			transition: all 0.2s linear;
			text-decoration: none;
			text-transform: uppercase;
		}

	</style>
</head>

<body class="thankyoubg">

	<main id="main">

		<div class="thankyoumain">
			<div class="thankyou">
				<div class="thankyoulogo"><a href="index.php"><img src="assets/img/victorialogo-updated.png" alt=""></a></div>
				<div class="thankyoutext">
					<h3>Thank You!</h3>
					<p>We appreciate you contacting us. One of our colleagues will get back to you shortly.</p>
					<strong>Have a great day!</strong>
				</div>
				<div class="thankyoulink">
					<!--                <a href="index.php">Home page</a>-->
					<a href="index.php" class="btn-get-started download-brochure">Go Back</a>
				</div>
				<div class="contactsocial">
					<a href="" target="_blank"><i class="bi bi-facebook"></i></a>
					<a href="" target="_blank"><i class="bi bi-instagram"></i></a>
					<a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
					<a href="" target="_blank"><i class="bi bi-youtube"></i></a>
				</div>
			</div>
		</div>

	</main><!-- End #main -->


	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			const urlParams = new URLSearchParams(window.location.search);
			const status = jQuery.trim(urlParams.get('status'));
			var delay = 10000;
			setTimeout(function() {
				window.location = "index.php";
			}, delay);
		});

	</script>
</body>

</html>
