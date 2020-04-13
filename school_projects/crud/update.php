<?php
include 'connect.php';

$NR	            =	$_POST["NR"];
$VOORNAAM 	    = 	$_POST["VOORNAAM"];
$ACHTERNAAM  	= 	$_POST["ACHTERNAAM"];


//voorraad updaten
$sql = "UPDATE acteurs 
		SET NR='$NR', VOORNAAM='$VOORNAAM', ACHTERNAAM='$ACHTERNAAM'";

echo $sql;
//statement uitvoeren
$result = mysqli_query($link, $sql);
header('Location: index.php');
?>