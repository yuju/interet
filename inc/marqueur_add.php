<div >
	<h1 class="page-header">Ajouter un marqueur</h1>
	<div>
		<form method="POST" action="inc/marqueur_add_handle.php">
			<div class="col-md-5">

				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="input" class="form-control" id="nom" name ="nom">
				</div>

				<div class="form-group">
					<label for="type">Type</label>
					<input type="input" class="form-control" id="type" name="type">
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
					<input type="pays" class="form-control" id="pays" name="pays">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" id="content" name="content"></textarea>
				</div>		

			</div>
			<div class="col-md-3">

				<div class="form-group">
					<label for="latitude">Latitude</label>
					<input type="latitude" class="form-control" id="latitude" name="latitude">
				</div>	
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="longitude">Longitude</label>
					<input type="input" class="form-control" id="longitude" name="longitude">
				</div>	
											
			</div>
			<div class="col-md-6">
			<div class="form-group">
					<label for="map">Map</label>
					<input type="input" class="form-control" id="map" name="map">
				</div>	
											
			</div>
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>