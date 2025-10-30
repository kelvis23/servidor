<?php
include "./functions/functionsKM.php";
echo "<h3>Ejercicio1</h3>";
$parImpar = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if(($i+$j) %2==0){
            $parImpar[$i][$j]="par";
        }else{
            $parImpar[$i][$j]="impar";
        }
    }
    
}
var_dump($parImpar);
echo "<h3>Ejercicio2</h3>";
echo "<ul>";
echo "<li>";
var_dump(basicStatistics(1,-2,3,2,9,-3));
echo"</li>";

echo"</ul>";
 echo"<h3>Ejercicio3</h3>";
 var_dump(operations([15,6,8.3,4]));
 echo"<br>";
 var_dump(operations([15,6,8.3,4],"order",false));
echo"<br>";
 var_dump(operations([15,6,8.3,4],"sum"));

 echo"<br>";
 var_dump(operations([15,6,8.3,4],"product",true));

?>