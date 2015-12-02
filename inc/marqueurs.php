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
		<button id="produit_add" type="button" class="btn btn-primary pull-right" aria-label="Right Align">
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
					<th>unite</th>
					<th>type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<?php 
						$query_cmd = "SELECT * FROM ingredient";
						$reponse = $bdd->query($query_cmd);
						while ($donnees = $reponse->fetch())
						{
							?>
							<tr>
							<td><?php echo $donnees["id"]; ?> </td>
							<td><?php echo $donnees["nom"]; ?> </td>
							<td><?php echo $donnees["unite"]; ?> </td>
							<td><?php echo $donnees["type"]; ?> </td>
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