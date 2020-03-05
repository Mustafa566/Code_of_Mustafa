<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tut");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>winkelwagen</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

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
</div>
<div class="index">
<div class="container" style="width:60%;">
    <h2 align="center">products</h2>
    <?php
    $query = "SELECT * FROM products";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)

        if (isset($_GET['cat'])) {
            $sql2 = "SELECT * FROM products WHERE categorie" . $_GET['cat'];
        } else {
            $sql2 = "SELECT * FROM products";
        }
        
    {
        while($row = mysqli_fetch_array($result))
        {
            ?>
            <div class="col-md-3">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
            <h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="add">
            </div>
            </form>
            </div>
            <?php
        }
    }
    ?>
    <div style="clear:both"></div>
    <h2>my products</h2>

    <div class="table-responsive">
    <table class="table table-bordered">
    <tr>
    <th width="40%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
    <?php
    if(!empty($_SESSION["cart"]))
    {
        $total = 0;
        foreach($_SESSION["cart"] as $keys => $values)
        {
            ?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["item_quantity"] * $values["product_price"]);
        }
        ?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        <?php
    }
    ?>
    </table>
    </div>
    </div>
</div>
</center>
 </body>
</html>