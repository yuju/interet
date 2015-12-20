<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Point d'Interet Touristique à Taïwan</a>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?php include 'inc/search_form.php'; ?>
				</li>
				<?php if (isset($_SESSION['usager'])){ ?>
				<li><a id="marqueurs" href="marqueurs.php">Marqueurs</a></li>
				<li><a id="usagers" href="usagers.php">Usagers</a></li>				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usager']['login'];?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a id="profile" href="#" data-login="<?php echo $_SESSION['usager']['login'];?>">Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a id="deconnexion" href="#">Deconnexion</a></li>
					</ul>
				</li>
				<?php } else{ ?>
				<li><a id="connexion" href="#">Connexion</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>




