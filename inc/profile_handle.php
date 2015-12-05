<?php
require "../config.php";

if ( isset($_POST["login"])) {
	$login 		= $_POST["login"];
	$nom 		= $_POST["nom"];
	$prenom 	= $_POST["prenom"];
	$password 	= $_POST["password"];
	$email 		= $_POST["email"];
	$mobile 	= $_POST["mobile"];
	$adresse 	= $_POST["adresse"];
	$date_naissance = $_POST["date_naissance"];
	
	$query_cmd = "UPDATE usager SET nom ='$nom',  prenom='$prenom', date_naissance='$date_naissance', email='$email', mobile='$mobile', adresse='$adresse' WHERE login ='$login'";
	$bdd->exec($query_cmd);
}
header("LOCATION:../index.php");
echo "update";