<?php

require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["ville"]) && isset($_POST["pays"])) {
	$nom 		= $_POST["nom"];
	$type 		= $_POST["type"];
	$adresse	= $_POST["adresse"];
	$ville		= $_POST["ville"];
	$pays		= $_POST["pays"];
	$latitude 	= $_POST["latitude"];
	$longitude	= $_POST["longitude"];
	$content	= $_POST["content"];
	

	$query_cmd = "INSERT INTO marqueur (nom, type, adresse, ville, pays, latitude, longitude, content) values ('$nom','$type','$adresse','$ville','$pays','$latitude','$longitude','$content')";
	$bdd->exec($query_cmd);
}
header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré";