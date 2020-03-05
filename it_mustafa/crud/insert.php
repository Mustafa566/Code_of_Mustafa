<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "films");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$NR = mysqli_real_escape_string($link, $_REQUEST['NR']);
$VOORNAAM = mysqli_real_escape_string($link, $_REQUEST['VOORNAAM']);
$ACHTERNAAM = mysqli_real_escape_string($link, $_REQUEST['ACHTERNAAM']);
 
// Attempt insert query execution
$sql = "INSERT INTO acteurs (NR, VOORNAAM, ACHTERNAAM) VALUES ('$NR', '$VOORNAAM', '$ACHTERNAAM')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

header('Location: index.php');
?>