<!DOCTYPE html>
<html>
<head>
	<title>klanten</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
</head>
<body background="https://www.rijnhoven.nl/files/vuurwerk.jpg">


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


<h1>commentaar op website</h1>

<div class="form">
	<form method="post" action="klant.php">
		naam: <input type="text" name="naam" id="naam">
<br><br> 
    	achternaam: <input type="text" name="achternaam" id="achternaam">
<br><br>
    	omschrijving: <input type="text" name="omschrijving" id="omschrijving">
<br><br>
      	<input type="submit" ="submit" name="Invoeren" value="Invoeren">
	</form>
</div>



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