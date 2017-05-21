<!DOCTYPE html>

<html lang="fr">

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>AndroidLand - Vivez de belles histoires</title>
		<link rel="icon" type="image/png" href="img/favicon.png" />


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

		<link href="css/custom.css" rel="stylesheet">

		<link rel="stylesheet" href="css/style-detail.css">


	</head>

  <?php

      $dateDebut = $_POST['date_arrive'];
      $dateDepart = $_POST['date_depart'];
      $nombres = $_POST['nombres'];
      $code = md5($dateDebut.$dateDepart.$nombres);



  ?>


	<body style="background: none repeat scroll 0 0;">

		<div class="container">
      <form>
      <div class="price-box2">

          <div class="img-responsive" style="background: url('img/billet.jpg'); background-repeat: no-repeat;">
<br>
              <H2 style="color: black; ">BILLET</H2>
<br>
              <p style="color: black;">Valable du <?php echo $dateDebut; ?></p>
              <p style="color: black;">au <?php echo $dateDepart; ?></p>
              <p style="color: black;">Pour <?php echo $nombres; ?> personne/s</p>
              <p style="color: black;">Code : <?php echo $code; ?></p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>

              <br>

          </div>

          <form>
              <input id="impression" name="impression" type="button" style="color: black;" onclick="imprimer_page()" value="Imprimer le billet" />
        </form>

      </div>

    </div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<script src="js/jquery-1.11.3.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script>


	</body>

</html>
