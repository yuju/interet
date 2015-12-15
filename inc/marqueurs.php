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
					<!-- <th>image_link</th> -->
					<th>Usager</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<?php 
					$query_cmd = "SELECT m.id, m.nom, type, ville, p.nom AS nom_pays, mu.date, u.login 
					FROM marqueur m
					LEFT JOIN pays p ON (p.code = m.pays)
					LEFT JOIN marqueur_usager mu ON (m.id = mu.id_marqueur)
					LEFT JOIN usager u ON (mu.id_usager = u.id)
					ORDER BY date DESC;";

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
							<td><?php echo $donnees["login"]; ?> </td>
							<td><?php echo $donnees["date"]; ?> </td>
							<td>
								<button id="marqueur_modify" type="button" class="btn btn-xs btn-primary" aria-label="Right Align" data-id="<?php echo $donnees["id"]; ?>">
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