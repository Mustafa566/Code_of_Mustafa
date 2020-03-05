<!DOCTYPE html>
<html>
<head>
    <title>CRUD Acteur</title>
    <link rel="stylesheet" type="text/css" href="stylecrud.css">
</head>
<body>
<center>
    <div>
        <nav>
            <button><a href="../index.html">Home</a></button>
            <button><a href = "../formulier_maken/main.php">formulier maken</a></button>
            <button><a href="../vuurwerkshop/Home.php">Vuurwerkshop</a></button>
            <button><a href="../website_project/Home.php">website_project</a></button>
            <button><a href="index.php">crud</a></button>
            <button><a href="../crud_system_pdo/index.php">crud pdo</a></button>
        </nav>
    </div>
</center>
<br>
<br>

<center><h1>Mustafa Bolat</h1></center>

<center><h1>1H</h1></center>

</br>
</br>

<center>
    <h2>Toevoegen acteur</h2>
</center>

<center>
    <form action="insert.php" method="post">

        <p>Nr:
        <input type="number"  name="NR" id="NR" pattern=".{2,}" required/>*</br>

        <p>Voornaam:
        <input type="text"  name="VOORNAAM" id="VOORNAAM" pattern=".{2,}" required/>*</br>

        <p>Achternaam:
        <input type="text"  name="ACHTERNAAM" id="ACHTERNAAM" pattern=".{2,}" required/>*</br></br>

        <input type="submit" value="opslaan" name="submit"/></br>
    </form>
</center>


</br>
</br>
</br>


<center>
    <div class= "tabel">
        <div><?php include 'db_tabel.php'; ?></div>
    </div>
</center>

</body>
</html>