<?php 
echo "<table>";

for ($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for ($h = 1; $h <= $i; $h++){
        echo "<td> $h </td>";
    }
    echo"</tr>";
}
echo "</table>"
?>