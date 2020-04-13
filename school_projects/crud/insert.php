<?php
include 'connect.php';

$NR	            =	$_POST["NR"];
$VOORNAAM 	    = 	$_POST["VOORNAAM"];
$ACHTERNAAM  	= 	$_POST["ACHTERNAAM"];

    $sql = "INSERT INTO acteurs (NR, VOORNAAM, ACHTERNAAM)
    SET NR='$NR', VOORNAAM='$VOORNAAM', ACHTERNAAM='$ACHTERNAAM'";

echo $sql;

$result = mysqli_query($link, $sql);
header('Location: index.php');

?>