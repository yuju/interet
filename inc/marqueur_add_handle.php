<?php
session_start();

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
	$image_link	= $_POST["image_link"];

	$query_cmd = "INSERT INTO marqueur (nom, type, adresse, ville, pays, latitude, longitude, image_link, content) values ('$nom','$type','$adresse','$ville','$pays','$latitude','$longitude','$image_link,'$content')";
	$bdd->exec($query_cmd);

	$id_marqueur = $bdd->lastInsertId(); // l'id du dernier marqueur inséré.
	$id_usager = $_SESSION['usager']['id']; // L'Id de l'usager connecté.
	$action = utf8_decode('Création');
	$date   = date('Y-m-d H:i:s');

	$query_cmd = "INSERT INTO marqueur_usager (id_marqueur, id_usager, action, date) values ($id_marqueur,$id_usager,'$action','$date')";
	$bdd->exec($query_cmd);
}
header("LOCATION:../marqueurs.php");
echo "Le nouveau produit est enrigistré";

?>