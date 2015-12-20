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


<div >
	<h1 class="page-header">Modify your profile</h1>
	<div>
		<form method="POST" action="inc/usager_modify_handle.php">
			<div class="col-md-6">
				<fieldset>

				<div class="form-group">
					<label for="id">id</label>
					<input type="input" class="form-control" id="id" name ="id" value="<?php if(isset($usager['id'])) echo $usager['id']; ?>">
				</div>

				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="input" class="form-control" id="nom" name ="nom" value="<?php if(isset($usager['nom'])) echo $usager['nom']; ?>">
				</div>

				<div class="form-group">
					<label for="prenom">Prénom</label>
					<input type="input" class="form-control" id="prenom" name="prenom" value="<?php if(isset($usager['prenom'])) echo $usager['prenom']; ?>">
				</div>
				<div class="form-group">
					<label for="date_naissance">Date de naissance</label>
					<input type="input" class="form-control" id="date_naissance" name="date_naissance" value="<?php if(isset($usager['date_naissance'])) echo $usager['date_naissance']; ?>">
				</div>

				</fieldset>	

				<div class="form-group">
					<label for="login">Login</label>
					<input type="input" class="form-control" id="login" name="login" value="<?php if(isset($usager['login'])) echo $usager['login']; ?>">
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="password" name="password" value="<?php if(isset($usager['password'])) echo $usager['password']; ?>">
				</div>

			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($usager['email'])) echo $usager['email']; ?>">
				</div>	
				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="input" class="form-control" id="mobile" name="mobile" value="<?php if(isset($usager['mobile'])) echo $usager['mobile']; ?>">
				</div>	
				<div class="form-group">
					<label for="adresse">Adresse</label>
					<input type="input" class="form-control" id="adresse" name="adresse" value="<?php if(isset($usager['adresse'])) echo $usager['adresse']; ?>">
				</div>									
			</div>
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Modify now</button>
			<button id="usager_delete" type="submit" class="btn btn-danger">Delete now</button>
			</div>
		
		</form>
	</div>
</div>

<div >
	<div class="col-md-4">
		<h3 class="sub-header">Historique des modifications</h3>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nom</th> <!-- username -->
						<th>Login</th>
						<th>Action</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						while ($donnees = $reponse->fetch())
						{
							?>
							<tr>
								<td><?php echo $donnees["nom"]; ?> </td>
								<td><?php echo $donnees["login"]; ?> </td>
								<td><?php echo utf8_encode($donnees["action"]); ?> </td>
								<td><?php echo $donnees["date"]; ?> </td>

							</tr>
							<?php
						}
						?>

					</tr>
				</tbody>
			</table>
		</div>	
	</div>
	
</div>