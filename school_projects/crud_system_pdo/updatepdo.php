<head>
    <link rel="stylesheet" href="style.css">
</head>


<?php
$NR = $_GET['NR'];
try{
        $con = new PDO ("mysql:host=localhost;dbname=films","root","");



$select = $con->prepare("SELECT * FROM acteurs where NR='$NR' ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
$data=$select->fetch();
if(isset($_POST['done']))
{

$voornaam = $_POST['VOORNAAM'];
$achternaam = $_POST['ACHTERNAAM'];


$update = $con->prepare("UPDATE acteurs SET VOORNAAM=:VOORNAAM ,ACHTERNAAM=:ACHTERNAAM where NR='$NR'");
$update->bindParam(':VOORNAAM',$voornaam);
$update->bindParam(':ACHTERNAAM',$achternaam);
$update->execute();
header("location:index.php");
}
}
catch(PDOException $e)
{
echo "error:".$e->getMessage();
}
?>
<form method="post">
<input type="text" name="VOORNAAM" placeholder="VOORNAAM" value="<?php echo $data['VOORNAAM'] ?>">
<input type="text" name="ACHTERNAAM" placeholder="ACHTERNAAM" value="<?php echo $data['ACHTERNAAM'] ?>">
<input type="submit" name="done" value="verzenden">
</form>