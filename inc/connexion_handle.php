<?php

require "../config.php";

if ( isset($_POST["logiin"]) && isset($_POST["password"])) {
	$login 		= $_POST["login"];
	$password 	= $_POST["password"];
	
	$query_cmd = "SELECT * FROM usager WHERE login ='$login' AND password='$password'";
	$reponse = $bdd->query($query_cmd);

	$usager = $reponse->fetch();
	var_dump($usager['login']);
}
//header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré";