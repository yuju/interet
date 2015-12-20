<?php
session_start();

require "../config.php";

if ( isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["email"]) ) {
	
	$login 		= addslashes($_POST["login"]);
	$password 	= addslashes($_POST["password"]);
	$email 		= addslashes($_POST["email"]);

	$query_cmd = "SELECT * FROM usager WHERE lower(login) = '$login' OR lower(email) = '$email'";
	$reponse = $bdd->query($query_cmd);
	$usager = $reponse->fetch();

	if($usager == false){
		$query_cmd = "INSERT INTO usager (login, password, email, role) values ('$login','$password','$email','member')";
		
		if($bdd->exec($query_cmd)){
			
			$id_usager = $bdd->lastInsertId();
			// the message
			$msg = "Bienvenue   $login,\n
			Nous vous remercions de votre inscription sur notre paltfome de points d'interet.\n
			Afin d’accéder à votre compte et de contribuer a enrichier notre platforme,\n
			conservez bien précieusement vos identifiant et mot de passe :\n
			Identifiant : $email, Mot de passe : $password";

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			mail($email,$login.", Bienvenue chez Point d'interet",$msg);

			// Création de session comme le cas de la connexion

			$_SESSION['usager'] = array(
				'id'    => $id_usager, 
				'login' => $login,
				'role'  => 'member'
				);

			header("LOCATION:../index.php");	
		}	
	}else{
		header("LOCATION:../errors.php?error=inscription");// TODO.
	}
}