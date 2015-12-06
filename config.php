<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "interet";

try
{
	$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>