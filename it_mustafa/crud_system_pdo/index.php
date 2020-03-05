<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<center>
  <div>
    <nav>
      <button><a href="../index.html">Home</a></button>
      <button><a href="../formulier_maken/main.php">formulier maken</a></button>
      <button><a href="../Vuurwerkshop/Home.php">Vuurwerkshop</a></button>
      <button><a href="../website_project/Home.php">website project</a></button>
      <button><a href="../crud/index.php">crud</a></button>
      <button><a href="index.php">crud pdo</a></button>
    </nav>
  </div>
</center>

<div class="header">
<div class="titel">
<div class="crud">
<h1>CRUD Acteur</h1>
</div>
</div>
</div>
<br><br><br>

<div class="nav">
    <?php include 'nav.php'?>
</div><br>

<?php include 'list.php';?>

</body>
</html>