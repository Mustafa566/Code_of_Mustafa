<?php
include 'connect.php';

$NR	            =	$_POST["NR"];
$VOORNAAM   	= 	$_POST["VOORNAAM"];
$ACHTERNAAM 	= 	$_POST["ACHTERNAAM"];



//voorraad DELETE
$sql = "DELETE FROM acteurs WHERE NR ='" . $_GET['NR'] . "'";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}

echo $sql;
//statement uitvoeren
$result = mysqli_query($link, $sql);
header('Location: index.php');
?>