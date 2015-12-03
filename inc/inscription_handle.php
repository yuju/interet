<?php

require "../config.php";

if ( isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["email"]) ) {
	
	$login 		= $_POST["login"];
	$password 	= $_POST["password"];
	$email 		= $_POST["email"];

	$query_cmd = "INSERT INTO usager (login, password, email) values ('$login','$password','$email')";
	$bdd->exec($query_cmd);
	
	// TO DO;
	// Ajouter la confirmation par email

	// the message
	$msg = "First line of text\nSecond line of text";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail($email,"Test Email",$msg);

}

header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré...";