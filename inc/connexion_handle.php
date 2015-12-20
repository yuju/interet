<?php
session_start();

require "../config.php";

if ( isset($_POST["login"]) && isset($_POST["password"])) {
	$login 		= addslashes($_POST["login"]);
	$password 	=addslashes( $_POST["password"]);
	$date_authentification  = date('Y-m-d H:i:s');
	
	$query_cmd = "SELECT * FROM usager WHERE login = '$login' AND password = '$password'";
	$reponse = $bdd->query($query_cmd);
	
	$usager = $reponse->fetch();
	
	if($usager !== false){
		$_SESSION['usager'] = array(
			'id'    => $usager['id'], 
			'login' => $usager['login'],
			'role'  => $usager['role']
			);

		$id_usager = $usager['id'];
		$query_cmd = "UPDATE usager SET date_authentification = '$date_authentification' WHERE id=$id_usager";
		$bdd->exec($query_cmd);	
	
	}else{
		header("LOCATION:../errors.php?error=connexion");
	}
}
header("LOCATION:../index.php");





