<div class="col-md-4 col-md-offset-4">
	<h2> Inscription</h2> 

	<form  method="POST" action="inc/inscription_handle.php">
		
		<div class="form-group">
			<label for="login">Login</label>
			<input type="input" class="form-control" id="login" name="login" placeholder="Setup an ID please">
		</div>
		
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
		
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email for indentify you">
		</div>

		<button type="submit" class="btn btn-primary pull-right">Inscription</button>
	</form>
</div>