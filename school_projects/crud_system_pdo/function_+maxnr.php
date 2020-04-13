<?php
    function bepmaxnr() : int {
        global $conn;
        include 'connectie.php';
        //bepal welk nummer
        $sql= "SELECT MAX(NR)+1 FROM ACTEURS";
        return (int) $conn->query($sql)->fetchColumn();
    }
?>