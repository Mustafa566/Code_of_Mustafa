<head>
    <link rel="stylesheet" href="style.css">
</head>

<div class="nav">
    <?php include 'nav.php'?>
</div>

<?php

if ($_GET['mode'] == "wzg"){
    $NR = $_GET['NR'];
    $con = new PDO ("mysql:host=localhost;dbname=films","root","");



    $select = $con->prepare("SELECT * FROM acteurs where NR='$NR'");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $select->execute();
    $data=$select->fetch();
    $voornaam = $data['VOORNAAM'];
    $achternaam = $data['ACHTERNAAM'];
    $action = "updatepdo.php?NR=$NR";


} else {
    $voornaam = "";
    $achternaam = "";
    $action="insert.php";
}



?>
<form method="post" action="<?=$action?>">
<input type="text" name="VOORNAAM" placeholder="VOORNAAM" value="<?= $voornaam ?>">
<input type="text" name="ACHTERNAAM" placeholder="ACHTERNAAM" value="<?php echo $achternaam ?>">
<input type="submit" name="done" value="verzenden">
</form>