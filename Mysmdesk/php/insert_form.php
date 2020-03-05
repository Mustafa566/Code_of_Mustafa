<?php
include 'connect.php';

$subject = $_POST['subject'];
$level = $_POST['level'];
$issue = $_POST['issue'];
$solution = $_POST['solution'];
$picture = $_POST['picture'];

// prepare sql and bind parameters
$sql = "INSERT INTO report (subject, level, issue, solution, picture)
VALUES (:subject,  :level, :issue, :solution, :picture);";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':subject', $subject);
$stmt->bindParam(':level', $level);
$stmt->bindParam(':issue', $issue);
$stmt->bindParam(':solution', $solution);
$stmt->bindParam(':picture', $picture);
$stmt->execute();
header('Location: ../smdesk/report.php');
?>