<?php
require "../config.php";

if ( isset($_POST["id"])) {
	$id         = $_POST["id"];
	$nom 		= $_POST["nom"];
	$type 		= $_POST["type"];
	$adresse	= $_POST["adresse"];
	$ville		= $_POST["ville"];
	$pays		= $_POST["pays"];
	$latitude 	= $_POST["latitude"];
	$longitude	= $_POST["longitude"];
	$content	= $_POST["content"];

	
	$query_cmd = "UPDATE marqueur SET nom ='$nom',  type='$type', adresse='$adresse', ville='$ville', pays='$pays', latitude='$latitude', longitude='$longitude', content='$content' WHERE id =$id";
	$bdd->exec($query_cmd);
	
}
header("LOCATION:../marqueurs.php");
echo "update";