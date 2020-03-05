<?php
if (isset($_GET['p_name'])) {
	include 'connect.php';
	$sql = "SELECT * FROM products WHERE p_name= '" . $_GET['p_name'] . "'";
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($result);
} else {
	echo "error: parameter p_name ontbreekt";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>wijzigen</title>
</head>
<body>

<center>

<h2>wijzig product</h2>

<form action="update.php?id=<?=$row['id']?>" method="post">
    <p>Naam van product:
    <input type="text"  name="p_name" id="p_name" value="<?=$row['p_name']?>" pattern=".{2,}" title="Minimaal 5 tekens" placeholder="Geef uw artikel.."  required/>*<br>

    <p>Afbeelding:
    <input type="url"  name="image" id="image" value="<?=$row['image']?>" pattern=".{2,}" title="" placeholder="Plaats foto.."  required/>*<br>

    <p>Prijs:
    <input type="text"  name="price" id="price" value="<?=$row['price']?>" pattern=".{2,}" title="Minimaal 1 teken" placeholder="Geef uw prijs.."  required/>*<br>
                
    <p>Voorraad:
    <input type="text"  name="voorraad" id="voorraad" value="<?=$row['voorraad']?>" pattern=".{2,}" title="Minimaal 1 teken" placeholder="Geef uw aantal aan.."  required/>*<br>

    <p>Categorie:
    <input type="text"  name="categorie" id="categorie" value="<?=$row['categorie']?>" pattern=".{2,}" title="Minimaal 3 tekens" placeholder="Geef aan bij welk categorie.."  required/>*<br>
                    
    <input type="submit" value=" Submit " name="submit"/></br>
    <input type="reset" value="Reset: niet gebruiken"></br>
</form>

</center>

</body>
</html>