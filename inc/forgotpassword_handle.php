<?php

require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["login"])) {
	
	
	$email 		= $_POST["email"];
	

	$query_cmd = "INSERT INTO usager (email) values ($email')";
	$bdd->exec($query_cmd);
}
header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré";