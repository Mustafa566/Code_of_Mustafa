<?php include 'db_vuurwerk.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>assortiment</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
</head>
<body background="https://www.rijnhoven.nl/files/vuurwerk.jpg">

<div class="shoppingcar">
	<a class="car" href="checkout.php"><img class="car" src="http://i66.tinypic.com/2ir3v5t.png"></a>
</div>

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

<div class="assor">
	<h1 class="heleassor">Hele assortiment</h1>
</div>

<br>

<center><div class="rij"><?php include 'db_assortiment.php';?></div></center>

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