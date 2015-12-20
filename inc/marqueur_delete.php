<?php
require "../config.php";

if ( isset($_GET["id"])) {
	$id 		= $_GET["id"];
	$query_cmd = "SELECT * FROM marqueur WHERE id =$id";
	$reponse = $bdd->query($query_cmd);
	$marqueur = $reponse->fetch();

	// get record history//
	$query_cmd = "SELECT * FROM marqueur_usager mu, usager u 
	WHERE (mu.id_usager = u.id) AND (id_marqueur =$id)";
	$reponse = $bdd->query($query_cmd);

}
?>

<div class="page-header">
	
	<h1>Supprimer un marqueur</h1>
	
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<strong>Attention!</strong> Voulez vous supprimer ce marqueur ?.
		</div>


		Type:<?php if(isset($marqueur['nom'])) echo $marqueur['nom']; ?></br>
		Adresse:<?php if(isset($marqueur['adresse'])) echo $marqueur['adresse']; ?></br>
		Ville:<?php if(isset($marqueur['ville'])) echo $marqueur['ville']; ?></br>
		Pays:<?php if(isset($marqueur['pays'])) echo $marqueur['pays']; ?></br>
	</div>
	
	<div class="col-md-12">
		<form method="POST" action="inc/marqueur_delete_handle.php">
			<input type="hidden"  id="id" name="id" value="<?php if(isset($marqueur['id'])) echo $marqueur['id']; ?>">
			<div class="col-md-4">
				<div class="form-group">
					<label for="latitude">Latitude</label>
					<input type="latitude" class="form-control" id="latitude" name="latitude" value="<?php if(isset($marqueur['latitude'])) echo $marqueur['latitude']; ?>">
				</div>	
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="longitude">Longitude</label>
					<input type="input" class="form-control" id="longitude" name="longitude" value="<?php if(isset($marqueur['longitude'])) echo $marqueur['longitude']; ?>">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="longitude">&nbsp;&nbsp;</label>
					<button type="submit" class="btn btn-danger form-control">Supprimer ce marqueur!!</button>
				</div>
			</div>
		</form>		
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<div id="mapmarker"></div>
		</div>		
	</div>
</div>
