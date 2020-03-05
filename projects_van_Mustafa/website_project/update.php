<?php
include 'connect.php';

$p_name	=	$_POST["p_name"];
$image 	= 	$_POST["image"];
$price 	= 	$_POST["price"];
$voorraad = $_POST["voorraad"];
$categorie = $_POST["categorie"];
$waarde2 = $_GET['id'];

//voorraad updaten
$sql = "UPDATE products 
		SET p_name='$p_name', image='$image', price='$price', voorraad='$voorraad', categorie='$categorie'
		WHERE id= $waarde2";

echo $sql;
//statement uitvoeren
$result = mysqli_query($link, $sql);
header('Location: assortiment.php');
?>