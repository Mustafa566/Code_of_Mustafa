<?php
include 'connect.php';

// Attempt select query execution
$sql = "SELECT * , (voorraad * price) AS bedrag FROM `products`";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";					
			//echo "<th>image</th>";				
			echo "<th>naam</th>";				
			echo "<th>prijs</th>";
            echo "<th>voorraad</th>";				
           	echo "<th>categorie</th>";		
            echo "</tr>";
            $totaal = 0;
        while($row = mysqli_fetch_array($result)){
            echo '<div class="list">';
            echo "<tr>";									
			//echo "<td>" . $row['image'] . "</td>";
			//echo "<td><img class='foto' src=".$row['image']."></td>";					
			echo "<td>" . $row['p_name'] . "</td>";									
			echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['voorraad'] . "</td>";										
			echo "<td>" . $row['categorie'] . "</td>";	
            echo "<td>" . '<a href="wijzig.php?p_name=' . $row['p_name'] . '">wijzig</a>' . "</td>";
            echo "<td>" . '<a href="delete.php?p_name=' . $row['p_name'] . '">delete</a>' . "</td>"; 	
            $totaal = $totaal + $row['bedrag'];							
            echo "</tr>";
            echo "</div>";
        }
        echo "<th> $totaal </th>";
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}
mysqli_close($link);
?>