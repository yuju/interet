<?php
session_start();

require "../config.php";

if ( isset($_POST["id"])) 
{
	$id         	= $_POST["id"];
	$nom 			= addslashes($_POST["nom"]);
	$prenom 		= addslashes($_POST["prenom"]);
	$date_naissance	= $_POST["date_naissance"];
	$login 			= addslashes($_POST["login"]);
	$password 		= $_POST["password"];
	$email 			= addslashes($_POST["email"]);
	$mobile			= $_POST["mobile"];
	$adresse		= addslashes($_POST["adresse"]);
	$date_modification = date('Y-m-d H:i:s');
	$date_suppression  = date('Y-m-d H:i:s');

	if(isset($_POST["usager_modify"])){
		$query_cmd = "UPDATE usager SET nom ='$nom',  prenom ='$prenom', date_naissance='$date_naissance', login='$login', password='$password', email ='$email', mobile='$mobile', adresse='$adresse', date_modification = '$date_modification' WHERE id=$id";
		$bdd->exec($query_cmd);
	}

	if(isset($_POST["usager_delete"])){
		$query_cmd = "UPDATE usager SET  date_suppression = '$date_modification' WHERE id=$id";
		$bdd->exec($query_cmd);
	}
}
header("LOCATION:../usagers.php");