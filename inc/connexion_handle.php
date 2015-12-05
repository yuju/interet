<?php
session_start();
require "../config.php";

if ( isset($_POST["login"]) && isset($_POST["password"])) {
	$login 		= $_POST["login"];
	$password 	= $_POST["password"];
	
	$query_cmd = "SELECT * FROM usager WHERE login ='$login' AND password='$password'";
	$reponse = $bdd->query($query_cmd);
	
	if($reponse->fetchColumn()){
		$usager = $reponse->fetch();
		$_SESSION['usager'] = array(
			'id'    => $usager['id'], 
			'login' => $usager['login']
		);
	}
}

header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré";