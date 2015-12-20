<?php
session_start();

require "../config.php";

if ( isset($_POST["id"])) 
{
	$id         	= $_POST["id"];
	$nom 			= $_POST["nom"];
	$prenom 		= $_POST["prenom"];
	$date_naissance	= $_POST["date_naissance"];
	$login 			= $_POST["login"];
	$password 		= $_POST["password"];
	$email 			= $_POST["email"];
	$mobile			= $_POST["mobile"];
	$adresse		= $_POST["adresse"];
	$date_modification   = date('Y-m-d H:i:s');

	$query_cmd = "UPDATE usager SET nom ='$nom',  prenom ='$prenom', date_naissance='$date_naissance', login='$login', password='$password', email ='$email', mobile='$mobile', adresse='$adresse', date_modification = '$date_modification' WHERE id=$id";
	$bdd->exec($query_cmd);
}
header("LOCATION:../usagers.php");