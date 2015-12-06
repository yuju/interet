<?php
require "../config.php";

if ( isset($_GET["login"])) {

	$login 		= $_GET["login"];
	
	$query_cmd = "SELECT * FROM usager WHERE login ='$login'";
	$reponse = $bdd->query($query_cmd);
	
	$usager = $reponse->fetch();
}
?>

<div >
	<h1 class="page-header">You can Modified your marqueurs</h1>
	<div>
		<form method="POST" action="inc/profile_handle.php">
			<div class="col-md-6">
				<fieldset>

				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="input" class="form-control" id="nom" name ="nom" value="<?php if(isset($usager['nom'])) echo $usager['nom']; ?>">
				</div>

				<div class="form-group">
					<label for="prenom">Prénom</label>
					<input type="input" class="form-control" id="prenom" name="prenom" value="<?php if(isset($usager['prenom'])) echo $usager['prenom']; ?>">
				</div>
				<div class="form-group">
					<label for="date_naissance">Date de naissance</label>
					<input type="input" class="form-control" id="date_naissance" name="date_naissance" value="<?php if(isset($usager['date_naissance'])) echo $usager['date_naissance']; ?>">
				</div>

				</fieldset>	

				<div class="form-group"> 
					<label for="login">Login</label>
					<input type="input" class="form-control" id="login" name="login" value="<?php if(isset($usager['login'])) echo $usager['login']; ?>" >
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>

			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($usager['email'])) echo $usager['email']; ?>">
				</div>	
				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="input" class="form-control" id="mobile" name="mobile" value="<?php if(isset($usager['mobile'])) echo $usager['mobile']; ?>">
				</div>	
				<div class="form-group">
					<label for="adresse">Adresse</label>
					<input type="input" class="form-control" id="adresse" name="adresse" value="<?php if(isset($usager['adresse'])) echo $usager['adresse']; ?>">
				</div>									
			</div>
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Modification</button>
			</div>
		</form>
	</div>
</div>