<?php
echo "<h2>ejercicio 1</h2>";
for ($i = 0; $i < 21; $i++) {
    $aletorio[] = random_int(10, 50);
}
echo "<p>" . implode(",", $aletorio) . "</p>";

$a = 0;
echo "<h2>ejercicio 2</h2>";
for ($i = 0; $i < count($aletorio); $i++) {
    $a += $aletorio[$i];

}

echo "<p>la suma de todos los numeros del array da $a</p>";
$media = $a / count($aletorio);
echo "<p>la media del array es $media</p>";
$valormax = max($aletorio);
$valormin = min($aletorio);
echo "<p>el maximo es $valormax el minimo es $valormin.</p>";

echo "<h2>ejercicio 3</h2>";
$altura = array(
    "kelvis" => "174 ",
    "pepe" => "190 ",
    "maria" => "166 ",
    "gary" => "178 ",
);
echo "<table border = 1px>";
echo "<th>nombre </th>";
echo "<th>altura </th>";
$suma = 0;
foreach ($altura as $subject => $persona) {
    $suma += $persona;
    echo "<tr>
        <td> $subject </td>
        <td> $persona</td> </tr>";

}

$media = $suma / count($altura);
echo "<tr>
        <td>$media</td></tr>";

echo "</table>";

echo "<h2>ejercicio 4</h2>";

for ($i = 1; $i <= 10; $i++) {
    $numero[] = random_int(0, 100);
}
echo "<p>" . implode(" , ", $numero) . "</p>";

for ($i = 0; $i < count($numero); $i++) {
    $a = $numero[$i] ** 2;
    $cuadrdo[] = $a;
}
echo "<p>" . implode(" , ", $cuadrdo) . "</p>";

for ($i = 0; $i < count($numero); $i++) {
    $a = $numero[$i] ** 3;
    $cubo[] = $a;
}
echo "<p>" . implode(" , ", $cubo) . "</p>";

echo "<h2>ejercicio 5</h2>";

$alumno = array("kelvi", "brado", "luis", "jorge");
$double = array(10, 5.5, 6.3, 4.5);
$bolean = array(true, true, true, false);
echo "<ul>";
for ($i = 0; $i < 4; $i++) {
    $matriculado = $bolean[$i] ? "si " : "no";
    echo "<li>" . $alumno[$i] . " tiene " . $double[$i] . " y " . $matriculado . " esta mtriculado </li>";
}
echo "</ul>";

echo "<h2>ejercicio 5</h2>";

$madrid = array(
    "Enero" => "14.8",
    "Febrero" => "19",
    "Marzo" => "25.2",
    "Abril" => "30.9",
    "Mayo" => "29.1",
    "Junio" => "37",
    "Agosto" => "38.7",
    "Setiembre" => "40",
    "Octubre" => "31",
    "Nobiembre" => "18.6",
    "Diciembre" => "13.1",
);

echo "<tr>";
foreach ($madrid as $meses => $temperatura) {
    echo "<th>$meses</th>";
}
echo "</tr>";

echo "<tr>";
foreach ($madrid as $meses => $temperatura) {
    echo "<td>$temperatura</td>";
}
echo "</tr>";

echo "</table>";
    ?>