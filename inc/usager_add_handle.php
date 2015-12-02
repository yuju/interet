<?php

require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["login"])) {
	$nom 		= $_POST["nom"];
	$prenom 	= $_POST["prenom"];
	$login 		= $_POST["login"];
	$password 	= $_POST["password"];
	$email 		= $_POST["email"];
	$mobile 	= $_POST["mobile"];
	$adresse 	= $_POST["adresse"];

	$query_cmd = "INSERT INTO usager (nom, prenom, login, password, email, mobile, adresse) values ('$nom','$prenom','$login','$password','$email','$mobile','$adresse')";
	$bdd->exec($query_cmd);
}
header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré";