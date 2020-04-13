<?php
if (isset($_GET['NR'])) {
	include 'connect.php';
	$sql = "SELECT * FROM acteurs WHERE NR= '" . $_GET['NR'] . "'";
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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<center>
    <h2>CRUD Acteur</h2>
</center>

<h4>wijzigen acteur</h4>

<center>
<form action="update.php?NR=<?=$row['NR']?>" method="post">
    <p>Nr:
    <input type="number"  name="NR" id="NR" value="<?=$row['NR']?>" pattern=".{2,}" required/>*<br>

    <p>Voornaam:
    <input type="text"  name="VOORNAAM" id="VOORNAAM" value="<?=$row['VOORNAAM']?>" pattern=".{2,}" required/>*<br>

    <p>Achternaam:
    <input type="text"  name="ACHTERNAAM" id="ACHTERNAAM" value="<?=$row['ACHTERNAAM']?>" pattern=".{2,}" required/>*<br>
                    
    <input type="submit" value="opslaan" name="submit"/></br>
</form>
</center>

<button><a href="index.php">ga terug</a></button>

</body>
</html>