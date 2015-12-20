<?php
session_start();

require "../config.php";

if ( isset($_POST["id"])) {
	$id         = $_POST["id"];
	
	$query_cmd = "DELETE From marqueur WHERE id=$id";
	$bdd->exec($query_cmd);

	$id_marqueur = $id; // l'id du dernier marqueur inséré.
	$id_usager = $_SESSION['usager']['id']; // L'Id de l'usager connecté.
	$action = utf8_decode('Supprimer');
	$date   = date('Y-m-d H:i:s');

	$query_cmd = "INSERT INTO marqueur_usager (id_marqueur, id_usager, action, date) values ($id_marqueur,$id_usager,'$action','$date')";
	$bdd->exec($query_cmd);	
}

header("LOCATION:../marqueurs.php");
echo "update";