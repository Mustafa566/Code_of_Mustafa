<?php include 'db_vuurwerk.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Siervuurwerk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
</head>
<body background="https://www.rijnhoven.nl/files/vuurwerk.jpg">

	<div class="header">
		<h2>The Tcr Developers</h2>
	</div>

<div class="dropdown">
  	<button class="dropbtn">Menu</button>
  		<div class="dropdown-content">
  			<a href="Home.php">Home</a>
		    <a href="Knalvuurwerk.php">Knalvuurwerk</a>
		    <a href="Siervuurwerk.php">Siervuurwerk</a>
		    <a href="assortiment.php">assortiment</a>
		    <a href="klanten.php">commetaar</a>
  		</div>
</div>


<br>

<div class="sier">
	<center><h1 class="siervw">Siervuurwerk</h1></center>
</div>

<br>

<center><div class="rij_sier"><?php include 'db_sier.php';?></div></center>

<br>

<div class="footer">
	<footer>
	  <p class="p">Gemaakt doot: Mustafa Bolat</p>
	  <p class="p">Telefoonnummer: <a href="tel:0612345678">
	  0612345678</a></p>

	  <p class="p">Mail: <a href="mailto:thetcrdevelopers@hotmail.com">
	  thetcrdevelopers@hotmail.com</a></p>
	</footer>
</div>

</body>
</html>