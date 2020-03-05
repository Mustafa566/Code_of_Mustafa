<?php
include 'connect.php';
if(isset($_POST["username"], $_POST["password"])) {     
	$username = $_POST["username"]; 
	$password = $_POST["password"]; 
	$result = "SELECT * FROM users WHERE username = '".$username."' AND  password = '".$password."'";

if($username == $password) {
	header("Location: ../smdesk/dashboard.html");
	}

else {
	header("Location: ../index.html");
	}
}
?>

