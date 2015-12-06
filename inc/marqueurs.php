<?php 
require 'config.php';
?>
<div >
	<h1 class="page-header">Marqueurs</h1>

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
					<th>Ville</th>
					<th>Pays</th>
					<th>Latitude</th>
					<th>Longitude</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<?php 
					$query_cmd = "SELECT m.*, p.nom as nom_pays FROM marqueur m, pays p Where m.pays = p.code";
					$reponse = $bdd->query($query_cmd);
					while ($donnees = $reponse->fetch())
					{
						?>
						<tr>
							<td><?php echo $donnees["id"]; ?> </td>
							<td><?php echo $donnees["nom"]; ?> </td>
							<td><?php echo $donnees["type"]; ?> </td>
							<td><?php echo $donnees["ville"]; ?> </td>
							<td><?php echo $donnees["nom_pays"]; ?> </td>
							<td><?php echo $donnees["latitude"]; ?> </td>
							<td><?php echo $donnees["longitude"]; ?> </td>
							<td>
								<button id="produit_add" type="button" class="btn btn-xs btn-primary" aria-label="Right Align">
									<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
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