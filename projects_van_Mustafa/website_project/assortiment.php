<!DOCTYPE html>
<html>
<head>
	<title>assortiment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Mustafa Bolat</h2>
	</div>

<div class="dropdown">
  	<button class="dropbtn">Menu</button>
  		<div class="dropdown-content">
  			<a href="Home.php">Home</a>
  			<a href="betoog.php">betoog</a>
		    <a href="assortiment.php">assortment</a>
		    <a href="index.php">products</a>
		    <!--<a href="index.php?cat='knalvuurwerk'">knalvuurwerk</a>
            <a href="index.php?cat='siervuurwerk'">siervuurwerk</a>
            <a href="index.php?cat='kindervuurwerk'">kindervuurwerk</a>-->
  		</div>
</div>

<center>
	<div class="assor">
		<h1 class="heleassor">assortiment</h1>
	</div>
</center>

<br>

<center>
<div class="rij">
	<?php 
		include 'db_assortiment.php';
	?>
</div>
</center>


</body>
</html>