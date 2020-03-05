<?php
    include_once 'conn.php';  

    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $omschrijving = $_POST['omschrijving'];


    $sql = "INSERT INTO klanten ( naam, achternaam, omschrijving)
    VALUES ('$naam', '$achternaam', '$omschrijving');";
    mysqli_query($conn, $sql);

header("location: klanten.php");
    
?>