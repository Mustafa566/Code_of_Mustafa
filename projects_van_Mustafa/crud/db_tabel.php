<?php
include 'connect.php';

// Attempt select query execution
$sql = "SELECT * FROM `acteurs`";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";								
			echo "<th>Nr</th>";				
			echo "<th>Voornaam</th>";
            echo "<th>Achternaam</th>";	
            echo "<th>Wijzigen</th>";		
            echo "<th>Verwijderen</th>";			
            echo "</tr>";
            $totaal = 0;
        while($row = mysqli_fetch_array($result)){
            echo '<div class="list">';
            echo "<tr>";													
			echo "<td>" . $row['NR'] . "</td>";									
			echo "<td>" . $row['VOORNAAM'] . "</td>";
            echo "<td>" . $row['ACHTERNAAM'] . "</td>";										
            echo "<td>" . '<a href="wijzig.php?NR=' . $row['NR'] . '">wijzig</a>' . "</td>";
            echo "<td>" . '<a href="delete.php?NR=' . $row['NR'] . '">delete</a>' . "</td>"; 							
            echo "</tr>";
            echo "</div>";
        }
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