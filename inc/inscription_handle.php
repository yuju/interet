<?php
require "../config.php";

if ( isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["email"]) ) {
	
	$login 		= $_POST["login"];
	$password 	= $_POST["password"];
	$email 		= $_POST["email"];

	$query_cmd = "INSERT INTO usager (login, password, email) values ('$login','$password','$email')";
	$bdd->exec($query_cmd);
	
	// TO DO;
	// Ajouter la confirmation par email

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

}

header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré...";