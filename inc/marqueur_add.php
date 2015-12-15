<?php

require "../config.php";

?>

<div >
	<h1 class="page-header">Ajouter un marqueur</h1>
	<div>
		<form method="POST" action="inc/marqueur_add_handle.php" enctype="multipart/form-data">
			<div class="col-md-4">

				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="input" class="form-control" id="nom" name ="nom">
				</div>

				<div class="form-group">
					<label for="type">Type</label>
					<select class="form-control" id="type" name="type">
						<option>choir un type</option>
						<?php 
						$query_cmd = "SELECT * FROM type";
						$reponse = $bdd->query($query_cmd);
						while ($donnees = $reponse->fetch())
						{
							// Utiliser PHP pour afficher les options.
							echo '<option value="'.$donnees["nom"].'">'.$donnees["nom"].'</option>';
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="adresse">Adresse</label>
					<input type="input" class="form-control" id="adresse" name="adresse">
				</div>

				<div class="form-group">
					<label for="ville">Ville</label>
					<input type="input" class="form-control" id="ville" name="ville">
				</div>
				<div class="form-group">
					<label for="pays">Pays</label>
					<select class="form-control" id="pays" name="pays">
						<option>choir un pays</option>
						<?php 
						$query_cmd = "SELECT * FROM pays";
						$reponse = $bdd->query($query_cmd);
						while ($donnees = $reponse->fetch())
						{
							// Utiliser php dans le html pour afficher les options.
							?>
							<option value="<?php echo $donnees["code"];?>"><?php echo $donnees["code"].' - '.$donnees["nom"];?></option>
							<?php
						} 
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="image">Image (Max : 2M)</label>
					<input type="file" id="image" name="image" >
					<p class="help-block">Choisir une image</p>
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" id="content" name="content"></textarea>
				</div>		

			</div>
			<div class="col-md-8">
				<div class="col-md-12">
					<div class="col-md-6">

						<div class="form-group">
							<label for="latitude">Latitude</label>
							<input type="latitude" class="form-control" id="latitude" name="latitude">
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="longitude">Longitude</label>
							<input type="input" class="form-control" id="longitude" name="longitude">
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
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>