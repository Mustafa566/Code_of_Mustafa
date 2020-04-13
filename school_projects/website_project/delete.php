<?php
include 'connect.php';

$p_name	=	$_POST["p_name"];
$image 	= 	$_POST["image"];
$price 	= 	$_POST["price"];
$voorraad = $_POST["voorraad"];
$categorie = $_POST["categorie"];



//voorraad DELETE
$sql = "DELETE FROM products WHERE p_name ='" . $_GET['p_name'] . "'";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}

echo $sql;
//statement uitvoeren
$result = mysqli_query($link, $sql);
header('Location: assortiment.php');
?>