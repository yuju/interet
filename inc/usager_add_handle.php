<?php

require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["login"])) {
	$nom 		= $_POST["nom"];
	$prenom 	= $_POST["prenom"];
	$login 		= strtolower($_POST["login"]);
	$password 	= $_POST["password"];
	$email 		= strtolower($_POST["email"]);
	$mobile 	= $_POST["mobile"];
	$adresse 	= $_POST["adresse"];

	$query_cmd = "SELECT * FROM usager WHERE lower(login) = '$login' OR lower(email) = '$email'";
	$reponse = $bdd->query($query_cmd);
	$usager = $reponse->fetch();

	if($usager == false){
		$query_cmd = "INSERT INTO usager (nom, prenom, login, password, email, mobile, adresse, role) values ('$nom','$prenom','$login','$password','$email','$mobile','$adresse','member')";
		$bdd->exec($query_cmd);
	}else{
		header("LOCATION:../errors.php?error=login");// TODO.
	}
}
//header("LOCATION:../usagers.php");
echo "Le nouveau produit est enrigistré";