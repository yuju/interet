<div class="col-md-4 col-md-offset-4">
	<h2> Connexion</h2> 

	<form  method="POST" action="inc/connexion_handle.php">
		<div class="form-group">
			<label for="login">Login</label>
			<input type="input" class="form-control" id="login" name="login" placeholder="Login...">
		</div>
		<div class="form-group">
			<label for="password">Password(<a id="forgotpassword"href="#">Forget Password</a>)</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			<p class="help-block"><a id="inscription" href="#" class="pull-right">S'inscrire</a></p>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"> Check me out
			</label>
		</div>
		<button type="submit" class="btn btn-primary pull-right">Connexion</button>
	</form>
</div>