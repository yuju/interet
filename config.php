<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=interet', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>