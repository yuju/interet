<?php
require "../config.php";

if(isset($_GET["nom"]) && isset($_GET["type"]) && isset($_GET["pays"]) && isset($_GET["ville"])){
	
	$where = "";
	
	// If $_GET["nom"] is not empty
	if(!empty($_GET["nom"])) $where .= " AND nom = '".$_GET["nom"]."'";
	
	// If $_GET["type"] is not empty
	if(!empty($_GET["type"])) $where .= " AND type = '".$_GET["type"]."'";
	
	// If $_GET["pays"] is not empty
	if(!empty($_GET["pays"])) $where .= " AND pays = '".$_GET["pays"]."'";

	// If $_GET["ville"] is not empty
	if(!empty($_GET["ville"])) $where .= " AND ville = '".$_GET["ville"]."'";

	if(!empty($where)){ // If $where is not empty 
		
		$query_cmd = "SELECT * FROM marqueur WHERE 1 $where";
		$reponse = $bdd->query($query_cmd);
		$donnees = $reponse->fetchAll();
		$json = json_encode($donnees);

		echo $json;
	}else{
		// Dont do nothing.
	}
}else{
	// Dont do nothing.
}
