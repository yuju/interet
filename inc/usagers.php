<?php 
	require 'config.php';
?>
<div >
	<h1 class="page-header">Usagers</h1>
	
	<div class="row placeholders">
		<button id="usager_add" type="button" class="btn btn-primary pull-right" aria-label="Right Align">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un usager
		</button>
	</div>

	<h2 class="sub-header">Liste des usager</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Login</th>
					<th>Email</th>
					<th>Mobile</th>
					<?php if (isset($_SESSION['usager']['role']) && $_SESSION['usager']['role'] == 'admin' ){ ?>
					<th>Statut</th>
					<th>Edit</th>
					<?php } ?>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<?php 
						$query_cmd = "SELECT * FROM usager";
						$reponse = $bdd->query($query_cmd);
						while ($donnees = $reponse->fetch())
						{
							?>
							<tr>
							<td><?php echo $donnees["id"]; ?> </td>
							<td><?php echo $donnees["nom"]; ?> </td>
							<td><?php echo $donnees["prenom"]; ?> </td>
							<td><?php echo $donnees["login"]; ?> </td>
							<td><?php echo $donnees["email"]; ?> </td>
							<td><?php echo $donnees["mobile"]; ?> </td>
							<?php if (isset($_SESSION['usager']['role']) && $_SESSION['usager']['role'] == 'admin' ){ ?>
							<td><?php echo $donnees["statut"]; ?></td>
							<td>
								<button id="usager_modify" type="button" class="btn btn-xs btn-primary" aria-label="Right Align"aria-label="Right Align" data-id="<?php echo $donnees["id"]; ?>">
									<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
								</button>
							</td>
							<?php } ?>
							</tr>
					<?php
						}
					?>

				</tr>
			</tbody>
		</table>
	</div>
</div>