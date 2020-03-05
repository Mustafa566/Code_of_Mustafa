<?php
include 'connectie.php';

$sql = "SELECT * FROM acteurs ORDER BY NR DESC";
$result = $conn->query($sql);

//if(mysqli_num_rows($result) > 0){
  echo "<table>";
  echo "<tr>";
  echo "<th>NR</th>";
  echo "<th>Achternaam</th></th>";
  echo "<th>Voornaam</th>";
  echo "<th>Wijzigen</th>";
  echo "<th>Verwijderen</th>";
  echo "</tr>";

  while($row = $result->fetch()){
  echo "<tr>";
  echo "<td>" . $row['NR'] . "</td>";
  echo "<td>" . $row['ACHTERNAAM'] . "</td>";
  echo "<td>" . $row['VOORNAAM'] . "</td>";
  echo "<td>" . '<a href="form_acteur.php?mode=wzg&&NR=' . $row['NR'] . '">Wijzigen</a></td>';
  echo "<td>" . '<a href="delete.php?NR=' . $row['NR'] . '">Verwijderen</a></td>';
  echo "</tr>";
}
    echo "</table>";
    echo "<br>";
  $conn = null;
?>