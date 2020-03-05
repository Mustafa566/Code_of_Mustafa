<?php
    include 'connectie.php';


if(isset($_GET['NR'])) {
    $NR = $_GET['NR'];
}

    // prepare sql and bind parameters

    $sql = "DELETE FROM acteurs WHERE NR=:NR";


    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':NR', $NR);
    $stmt->execute();
    header("location: index.php?comment=Acteur_verwijderd");


$conn = null;
?>