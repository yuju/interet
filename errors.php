<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Point d'interet</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body onload="initMap();">
	
	<?php require "config.php"; ?>

	<header><?php require "inc/header.php"; ?></header>

	<section id="main-section" class="container-fluid">
		<div class="row">
			<aside class="col-sm-3 col-md-2 sidebar">
				<?php require "inc/aside.php"; ?>
			</aside>
			<section id="section" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1>Erreurs</h1>
				<br>
				<br>
				<?php
				if (isset($_GET['error'])) {

					$error = $_GET['error'];
					switch ($error) {
						case 'inscription':
							?>
							<div class="alert alert-danger" role="alert"><strong>Erreur d'inscription! </strong> Votre login ou email exist dans notre base de données</div>
							<?php 							break;
						case 'connexion':
							?>
							<div class="alert alert-danger" role="alert"><strong>Erreur de connexion! </strong> Votre login ou mot de passe est incorect </div>
							<?php 
							break;
						case 'value':
							# code...
							break;
					}
				}
				?>				
			</section>
		</div>
	</section>

	<footer> <?php require "inc/footer.php"; ?></footer>

</body>
</html>
