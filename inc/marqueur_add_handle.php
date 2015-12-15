<?php
session_start();

require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["ville"]) && isset($_POST["pays"]) && isset($_FILES['image']) ) {

	$nom 		= $_POST["nom"];
	$type 		= $_POST["type"];
	$adresse	= $_POST["adresse"];
	$ville		= $_POST["ville"];
	$pays		= $_POST["pays"];
	$latitude 	= $_POST["latitude"];
	$longitude	= $_POST["longitude"];
	$content	= $_POST["content"];

	// Image
	$image 		= $_FILES['image'];
	$errors= array();
	$image_name = $image['name'];
	$image_size = $image['size'];
	$image_tmp  = $image['tmp_name'];
	$image_type = $image['type'];
	$image_ext  = strtolower(  substr(  strrchr($image_name, '.')  ,1)  );

	$expensions= array("jpeg","jpg","png");

	if(in_array($image_ext,$expensions)=== false){
		$errors[]="extension not valide, veuillez choisir des JPEG, JPG ou PNG.";
	}

	if($image_size > 2097152){
		$errors[]='Taille maximale dépassé (2 MB)';
	}

	if(empty($errors)==true){
		move_uploaded_file($image_tmp,"../assets/img/markers/".$image_name);
		echo "Success";
	}else{
		print_r($errors);
	}

	// Inserer dans la table Marqueur.
	$query_cmd = "INSERT INTO marqueur (nom, type, adresse, ville, pays, latitude, longitude, image_name, content) values ('$nom','$type','$adresse','$ville','$pays','$latitude','$longitude','$image_name','$content')";
	$bdd->exec($query_cmd);

	$id_marqueur = $bdd->lastInsertId(); // l'id du dernier marqueur inséré.
	$id_usager = $_SESSION['usager']['id']; // L'Id de l'usager connecté.
	$action = utf8_decode('Création');
	$date   = date('Y-m-d H:i:s');

	// Insérer dans la table marqueur_usager
	$query_cmd = "INSERT INTO marqueur_usager (id_marqueur, id_usager, action, date) values ($id_marqueur,$id_usager,'$action','$date')";
	$bdd->exec($query_cmd);
}
header("LOCATION:../marqueurs.php");
echo "Le nouveau produit est enrigistré";

?>