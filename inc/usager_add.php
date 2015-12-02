<div >
	<h1 class="page-header">Ajouter un produit</h1>
	<div>
		<form method="POST" action="inc/usager_add_handle.php">
			<div class="col-md-6">
				<fieldset>

				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="input" class="form-control" id="nom" name ="nom">
				</div>

				<div class="form-group">
					<label for="prenom">Prénom</label>
					<input type="input" class="form-control" id="prenom" name="prenom">
				</div>
				<div class="form-group">
					<label for="date_naissance">Date de naissance</label>
					<input type="input" class="form-control" id="date_naissance" name="date_naissance">
				</div>

				</fieldset>	

				<div class="form-group">
					<label for="login">Login</label>
					<input type="input" class="form-control" id="login" name="login">
				</div>
				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>

			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>	
				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="input" class="form-control" id="mobile" name="mobile">
				</div>	
				<div class="form-group">
					<label for="adresse">Adresse</label>
					<input type="input" class="form-control" id="adresse" name="adresse">
				</div>									
			</div>
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>