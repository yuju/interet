<?php 
	require '../config.php';
?>
<div >
	<h1 class="page-header">Marqueurs</h1>

	<div class="row placeholders">
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
	</div>
	
	<div class="row placeholders">
		<button id="marqueur_add" type="button" class="btn btn-primary pull-right" aria-label="Right Align">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un marqueur
		</button>
	</div>

	<h2 class="sub-header">Liste des marqueurs</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nom</th>
					<th>Type</th>
					<th>Adresse</th>
					<th>Ville</th>
					<th>Pays</th>
					<th>Latitude</th>
					<th>Longitude</th>
					<th>Content</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<?php 
						$query_cmd = "SELECT * FROM marqueur";
						$reponse = $bdd->query($query_cmd);
						while ($donnees = $reponse->fetch())
						{
							?>
							<tr>
							<td><?php echo $donnees["id"]; ?> </td>
							<td><?php echo $donnees["nom"]; ?> </td>
							<td><?php echo $donnees["type"]; ?> </td>
							<td><?php echo $donnees["adresse"]; ?> </td>
							<td><?php echo $donnees["ville"]; ?> </td>
							<td><?php echo $donnees["pays"]; ?> </td>
							<td><?php echo $donnees["latitude"]; ?> </td>
							<td><?php echo $donnees["longitude"]; ?> </td>
							<td><?php echo $donnees["content"]; ?> </td>
							<td>
								<button id="produit_add" type="button" class="btn btn-xs btn-primary" aria-label="Right Align">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</button>
								<button id="produit_add" type="button" class="btn btn-xs btn-success" aria-label="Right Align">
									<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
								</button>
								<button id="produit_add" type="button" class="btn btn-xs  btn-danger" aria-label="Right Align">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
							</tr>
					<?php
						}
					?>

				</tr>
			</tbody>
		</table>
	</div>
</div>