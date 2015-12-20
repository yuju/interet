<div class="col-md-4 col-md-offset-4">
	<h2> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact Us</h2> 

	<form  method="POST" action="inc/contact_handle.php">
		<div class="form-group">
			<label for="nom">Nom</label>
			<input type="input" class="form-control" id="nom" name="nom" placeholder="Please your real name">
		</div>

		<div class="form-group">
			<label for="prenom">Prénom</label>
			<input type="input" class="form-control" id="prenom" name="prenom">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="We will contact you by this mail">
		</div>	

		<div class="form-group">
			<label for="content">Content</label>
			<textarea class="form-control" id="content" width="500px" heigh="500px" name="content" placeholder="Thanks for your kindly information"></textarea>
		</div>			

		<button type="submit" class="btn btn-primary pull-right">Submit</button>
	</form>
</div>