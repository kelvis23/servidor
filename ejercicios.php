<?php
echo "<p>ejercicio 1</p>";
$i = 2;
echo gettype($i), " su valor es $i";
echo "<br>";

$i = 6.5;
echo gettype($i), " su valor es $i";
echo "<br>";

$i = "hola";
echo gettype($i), " su valor es $i";
echo "<br>";

$i = true;
echo gettype($i), " su valor es $i";
echo "<br>";

echo "<p>ejercicio 2</p>";
$a = 5;
$b = 2;
echo "$a mob $b = ";
$i = $a ** $b;
echo "$i";

echo "<p>ejercicio 3</p>";
$name = "kelvis";
$surname = "moises sanchez";
$age = "2006";
echo "
    <table border = 1>
     <tr>
         <td>Nombre</td> 
         <td>$name</td> 
     </tr>
     <tr>
         <td>apellido</td> 
         <td>$surname</td> 
     </tr>
     <tr>
         <td>año de nacimeiento</td> 
         <td>$age</td> 
     </tr>
    </table>";

echo "<p>ejercicio 4</p>";
$age = 18;
echo "Actual mente tienes $age años , ";
$age += 10;
echo "dentro de 10 tendras $age. ";
$age = 60 - $age;
echo "Te queda $age para jubilarte";

echo "<p>ejercicio 5</p>";

$precio = 500;
if ($precio >= 1000) {
    echo "caro";
} else if ($precio > 100 && $precio < 1000) {
    echo "barato";
} else {
    echo "negativo";
}

echo "<p>ejercicio 6</p>";
$hora = 1;
$minut = 60;
$secon = 22;
if ($secon >= 60) {
    $minut++;
    $secon = 0;
    if ($minut >= 60) {
        $hora++;
        $minut = 0;
        if ($hora >= 60) {
            $hora = 0;
        }
    }
}
echo "<p>un segundo despues $hora : $minut : $secon </p>";


echo "<p>ejercicio 7</p>";

$maximo = 4;

for ($i = 1; $i <= $maximo; $i++) {
    echo "<p>$i</p>";
}

echo "<p>ejercicio 8</p>";
$number = 15;
echo "<ul>";
for ($i = 9; $i <= $number; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>";

echo "<p>ejercicio 9</p>";
echo "<p>";

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i,";
    }
}
echo "</p>";

echo "<p>ejercicio 10</p>";

for ($i = 50; $i >= 20; $i--) {
    if ($i % 3 != 0 && $i % 7 != 0) {
        echo " $i,";
    }
}

echo "<p>ejercicio 11</p>";
$a = 0;
for ($i = 1; $i <= 10; $i++) {
    echo "$i";
    $a += $i;
}
echo "<br>";
echo "= $a";

echo "<p>ejercicio 12</p>";
$numero = 4;
$a = 1;
for ($i = 1; $i <= $numero; $i++) {
    echo "$i,";
    $a *= $i;
}
echo "<br>";
echo "=$a";

echo "<br>";
echo "<p>ejercicio 13</p>";

$base = 5;
$exponente = 2;
echo "$base y $exponente ";
$a = pow($base, $exponente);
echo "= $a";

echo "<p>ejercicio 14</p>";

echo "<p>ejercicio 15</p>";
echo "<table border =1>";
echo "<tr> 
<td> a </td>
<td>b</td>
<td>resultado</td>
</tr>";
$number = 2;
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    $x = $number * $i;
    echo "
    <td>$number</td>
    <td>$i</td>
    <td>$x<td";
    echo "</tr>";
}
echo "</table>";

echo "<p>ejercicio 16</p>";

$n = 0;
$y = 1;
for ($i = 1; $i <= 20; $i++) {

    $x = $n + $y;
    $n = $y;
    $y = $x;
    echo " $y, ";
}

echo "<p>ejercicio 17</p>";
for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 4; $j++) {
        echo "x";
    }
    echo "<br>";
}
echo "<p>ejercicio 18</p>";
$x = 0;
for ($i = 0; $i <= 5; $i++) {

    for ($j = 0; $j <= $x; $j++) {
        echo "x";
    }
    $x++;

    echo "<br>";
}
echo "<p>ejercicio 19</p>";
$x = 0;
for ($i = 0; $i <= 5; $i++) {

    for ($j = 1; $j <= $x; $j++) {
        echo "$j";
    }
    $x++;

    echo "<br>";
}
echo "<p>ejercicio 20</p>";

echo "<table border =1>";
echo "<tr>";
echo "<th class= 'thx'>x</th>";
for ($col = 0; $col <= 9; $col++) {
    echo "<th class = thnumber>$col</th>";
}
echo "</tr>";

for ($fila = 0; $fila <= 9; $fila++) {
    echo "<tr>";
    echo "<th class = tdnumber>$fila</th>";
    for ($s = 0; $s <= 9; $s++) {
        $producto = $fila * $s;
        echo "<td>$producto</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<p>ejercicio 21/p>";
$cadena = "php";
$cadena ++;
var_dump($cadena);
 $cadena = "hola";
 var_dump(strlen( $cadena));


?>
<table>
    <tr>
        <td>Dato 1</td>
        <td>Dato 2</td>
    </tr>
    <tr>
        <td>Dato 3</td>
        <td>Dato 4</td>
    </tr>
</table>