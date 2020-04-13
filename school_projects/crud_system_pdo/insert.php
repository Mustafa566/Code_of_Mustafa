<?php
include 'connectie.php';
include 'function_+maxnr.php';



    $ACHTERNAAM = $_POST['ACHTERNAAM'];
    $VOORNAAM = $_POST['VOORNAAM'];
    $NR = bepmaxnr();
    echo "$NR";
    // prepare sql and bind parameters
    $sql = "INSERT INTO acteurs (NR, ACHTERNAAM, VOORNAAM)
    VALUES (:NR, :ACHTERNAAM,  :VOORNAAM);";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':NR', $NR);
    $stmt->bindParam(':ACHTERNAAM', $ACHTERNAAM);
    $stmt->bindParam(':VOORNAAM', $VOORNAAM);
    $stmt->execute();
$conn = null;
header('Location: index.php');

?>