<?php
session_start();

require "../config.php";

if ( isset($_POST["id"])) 
{
	$id         	= $_POST["id"];
	$date_suppression   = date('Y-m-d H:i:s');

	$query_cmd = "UPDATE usager SET date_suppression = '$date_suppression' WHERE id=$id";
	$bdd->exec($query_cmd);
}
header("LOCATION:../usagers.php");
