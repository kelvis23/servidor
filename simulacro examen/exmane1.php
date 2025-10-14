<?php
$array = [];
echo "<table border = 1>";
echo "<tr>";
for ($i = 1; $i <= 3; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>";
        echo $num = $i * $j;
        $array[] = $num;
        echo "</td>";

    }
    echo "</tr>";
}



//3


echo"<br>";
echo promedio(7,10);

?>