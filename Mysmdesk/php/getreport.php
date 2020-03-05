<?php
include 'connect.php';

$sql = "SELECT * FROM report ORDER BY id DESC";
$result = $conn->query($sql);
  echo "<table>";
  echo "<tr>";
  echo "<th>Subject</th>";
  echo "<th>Level</th>";
  echo "<th>Issue</th>";
  echo "<th>Solution</th>";
  echo "<th>Picture</th>";
  echo "</tr>";
  while($row = $result->fetch()){
  echo "<tr>";
  echo "<td>" . $row['subject'] . "</td>";
  echo "<td>" . $row['level'] . "</td>";
  echo "<td>" . $row['issue'] . "</td>";
  echo "<td>" . $row['solution'] . "</td>";
  echo "<td><img class='picture' src=".$row['picture']."></td>";
}
  echo "</table>";
  echo "<br>";
  $conn = null;
?>