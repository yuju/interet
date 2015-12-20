<?php
session_start();

require "../config.php";

if ( isset($_POST["login"]) && isset($_POST["password"])) {
	$login 		= $_POST["login"];
	$password 	= $_POST["password"];
	
	$query_cmd = "SELECT * FROM usager WHERE login = '$login' AND password = '$password'";
	$reponse = $bdd->query($query_cmd);
	
	$usager = $reponse->fetch();
	
	if($usager !== false){
		$_SESSION['usager'] = array(
			'id'    => $usager['id'], 
			'login' => $usager['login'],
			'role'  => $usager['role']
		);
	}else{
		header("LOCATION:../errors.php?error=connexion");
	}
}
header("LOCATION:../index.php");
