<?php
// Resultaat ophalen.
include 'connect.php';
$subject            = $_POST["subject"];
$level              = $_POST["level"];
$issue              = $_POST["issue"];
$solution           = $_POST["solution"];
$picture            = $_POST["picture"];

// Waarde
echo "<b>Naam:</b> $subject</br>";
echo "<b>level:</b> $level</br>";
echo "<b>issue: </b> $issue</br>";
echo "<b>solution: </b> $solution</br>";
echo "<b>picture </b> $picture</br>";

?>