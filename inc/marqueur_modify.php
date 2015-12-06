<?php
require "../config.php";

if ( isset($_GET["id"])) {
	$id 		= $_GET["id"];
	$query_cmd = "SELECT * FROM marqueur WHERE id =$id";
	$reponse = $bdd->query($query_cmd);
	$marqueur = $reponse->fetch();
}
?>


<div >
	<h1 class="page-header">You can Modified your marqueurs</h1>
	<div>
		<form method="POST" action="inc/marqueur_modify_handle.php">
			<div class="col-md-4">
				<input type="hidden" class="form-control" id="id" name ="id" value="<?php if(isset($marqueur['id'])) echo $marqueur['id']; ?>">
				
				<div class="form-group">
					<label for="nom">nom</label>
					<input type="input" class="form-control" id="nom" name ="nom" value="<?php if(isset($marqueur['nom'])) echo $marqueur['nom']; ?>">
				</div>

				<div class="form-group">
					<label for="type">type</label>
					<input type="input" class="form-control" id="type" name="type" value="<?php if(isset($marqueur['type'])) echo $marqueur['type']; ?>">
				</div>
				<div class="form-group">
					<label for="adresse">Adresse</label>
					<input type="input" class="form-control" id="adresse" name="adresse" value="<?php if(isset($marqueur['adresse'])) echo $marqueur['adresse']; ?>">
				</div>

				<div class="form-group">
					<label for="ville">Ville</label>
					<input type="input" class="form-control" id="ville" name="ville" value="<?php if(isset($marqueur['ville'])) echo $marqueur['ville']; ?>">
				</div>

				<div class="form-group">
					<label for="pays">Pays</label>
					<input type="input" class="form-control" id="pays" name="pays" value="<?php if(isset($marqueur['pays'])) echo $marqueur['pays']; ?>">
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" id="content" name="content"value="<?php if(isset($marqueur['content'])) echo $marqueur['content']; ?>">
					</textarea>
				</div>		

			</div>
			<div class="col-md-8">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="form-group">
							<label for="latitude">Latitude</label>
							<input type="latitude" class="form-control" id="latitude" name="latitude" value="<?php if(isset($marqueur['latitude'])) echo $marqueur['latitude']; ?>">
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="longitude">Longitude</label>
							<input type="input" class="form-control" id="longitude" name="longitude" value="<?php if(isset($marqueur['longitude'])) echo $marqueur['longitude']; ?>">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<div id="mapmarker"></div>
					</div>		
				</div>
			</div>
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Modified</button>
			</div>
		</form>
	</div>
</div>