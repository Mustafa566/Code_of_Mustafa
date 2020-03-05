<?php
include 'connect.php';

$sql = "SELECT * FROM documents ORDER BY uploaded_on DESC";
$result = $conn->query($sql);
  echo "<table>";
  echo "<tr>";
  echo "<th>File name</th>";
  echo "<th>Uploaded on</th>";
  echo "</tr>";
  while($row = $result->fetch()){
  echo "<tr>";
  echo "<td>" . $row['file_name'] . "</td>";
  echo "<td>" . $row['uploaded_on'] . "</td>";
}
  echo "</table>";
  echo "<br>";
  $conn = null;
?>