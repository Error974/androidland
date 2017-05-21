<?php require('config/conf.php');

	if(isset($_POST['submit'])) {
		if(isset($_POST['survey_option'])){
			$answer = $_POST['survey_option'];
			$survey->saveAnswer($answer);
		}
	}
	$answers = $survey->getAnswers();
	$totalAnswer = ($survey->getTotalAnswer());
	$totalAnswer = intval($totalAnswer['totalAnswer']);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Fullscreen - Slider Background</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">

		<!-- Simple Line Icons -->
		<link href="css/simple-line-icons/simple-line-icons.css" rel="stylesheet">

		<!-- google font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

		<!-- owl-carousel -->
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">

		<!-- magnific-popup -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

		<!-- animate -->
		<link href="css/animate/animate.css" rel="stylesheet">

		<!-- style -->
		<link href="css/style.css" rel="stylesheet">


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="slider-background">

		<!-- Preloader 	-->
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
		<!-- ./Preloader -->

		<!-- pattern -->
		<div id="bg_pattern"></div>
		<!-- ./pattern -->

		<!-- scrollToTop -->
		<a href="slider-background.html#" class="scrollToTop">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		<!-- ./scrollToTop -->


		<!-- header -->
		<header id="header">
			<nav class="navbar navbar-inverse navbar-fixed-top">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.html">
					<img src="img/logo1.png" alt="logo">
				  </a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="collapse-navbar">

				  <ul class="nav navbar-nav navbar-right">
					<li><a data-scroll href="index.html">Services</a></li>
					<li><a data-scroll href="index.html">Gallery</a></li>
					<li><a data-scroll href="index.html">Portfolio</a></li>
					<li><a data-scroll href="index.html">Team</a></li>
					<li><a data-scroll href="index.html">News</a></li>
					<li><a data-scroll href="index.html">Pricing</a></li>
					<li><a data-scroll href="index.html">Testimonials</a></li>
					<li><a data-scroll href="index.html">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container -->
			</nav>
		</header>
		<!-- ./header -->


		<!-- survey section -->
		<section id="pricing" class="section wow fadeInUp">
			<div class="container">

				<div class="section-heading">
					<h2>Votez pour vos prochains thèmes</h2>
					<div class="separator"></div>
				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="price-box2">
							<?php if(isset($_POST['submit'])): ?>
								<h2>Résultat !</h2>
								<h3><?= $totalAnswer ?> votes</h3>
								<div class="separator"></div>
								<?php foreach($answers as $answer): ?>
									<div class="radio">
										<?= $answer['answer'] ?> <?php $timed = ($answer['nb_answer'] * 100); echo round( $timed/$totalAnswer, 0); ?>%
									</div>
								<?php endforeach; ?>
							<?php else: ?>
								<h2>On vous écoute !</h2>
								<div class="separator"></div>
								<form class="" action='' method="post">
									<?php foreach($answers as $answer): ?>
										<div class="radio">
											<label><input type="radio" class="survey_option" name="survey_option" value="<?= $answer['id'] ?>"><?= $answer['answer'] ?></label>
										</div>
									<?php endforeach; ?>
									<input type="submit" name="submit" class="btn btn-custom btn-lg btn-block"></input>
								</form>
							<?php endif; ?>
						</div>
					</div>
				</div><!-- ./row -->

			</div>

		</section>
		<!-- end survey section -->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- smooth-scroll -->
		<script src="plugins/smooth-scroll/smooth-scroll.js"></script>

		<!-- backstretch -->
		<script src="plugins/backstretch/backstretch.min.js"></script>

		<!-- owl-carousel -->
		<script src="plugins/owl-carousel/owl.carousel.js"></script>

		<!-- wow -->
		<script src="plugins/wow/wow.js"></script>

		<!-- typed -->
		<script src="plugins/typed/typed.min.js"></script>

		<!-- magnific-popup -->
		<script src="plugins/magnific-popup/jquery.magnific-popup.js"></script>

		<!-- jqBootstrapValidation -->
		<script src="plugins/jqBootstrapValidation/jqBootstrapValidation.js"></script>

		<!-- switcher -->
		<script type="text/javascript" src="switcher/switcher.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>

	</body>
</html>
