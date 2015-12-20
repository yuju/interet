<?php
require "../config.php";

if ( isset($_GET["id"])) {
	$id 		= $_GET["id"];
	$query_cmd = "SELECT * FROM usager WHERE id=$id";
	$reponse = $bdd->query($query_cmd);
	$usager = $reponse->fetch();

	// get record history//
	$query_cmd = "SELECT * FROM usager_modify um, usager u 
	WHERE (um.id_usager = u.id)";
	$reponse = $bdd->query($query_cmd);
	

}
?>

<div class="page-header">
	
	<h1>Supprimer un usageur</h1>
	
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<strong>Attention!</strong> Voulez vous supprimer ce usager ?.
		</div>


		Nom:<?php if(isset($usager['nom'])) echo $usager['nom']; ?></br>
		Prénom:<?php if(isset($usager['prenom'])) echo $usager['prenom']; ?></br>
		Login:<?php if(isset($usager['login'])) echo $usager['login']; ?></br>
		Email:<?php if(isset($usager['email'])) echo $usager['email']; ?></br>
	</div>
	
	<div class="col-md-12">
		<form method="POST" action="inc/usager_delete_handle.php">
			<input type="hidden"  id="id" name="id" value="<?php if(isset($usager['id'])) echo $usager['id']; ?>">
			
			
			<div class="col-md-4">
				
				<button type="submit" class="btn btn-danger form-control">Supprimer ce usager!!</button>
			
			</div>
		</form>		
	</div>
</div>
