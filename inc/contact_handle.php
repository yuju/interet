<?php
require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])&& isset($_POST["content"]) ) {
	
	$nom 		= $_POST["nom"];
	$prenom 	= $_POST["prenom"];
	$email 		= $_POST["email"];
	$content	= $_POST["content"];

	$query_cmd = "INSERT INTO contact (nom, prenom, email, content) values ('$nom','$prenom','$email','$content')";
	$bdd->exec($query_cmd);

	// the message
	$msg = "$nom,$prenom,\n
	Merci pour votre conciel.\n
	This is your suggestion:$content";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,200);
	$email .=",durancefiona@gmail.com";
	// send email
	mail($email,$nom.",thanks for your suggestion",$msg);

	header("LOCATION:../index.php");
}

?>