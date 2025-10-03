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

echo "<h2>ejercicio 6</h2>";

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

echo"<table border = 1>";
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

echo "<h2>ejercicio 7</h2>";


echo"<table border =1 > ";

foreach ($madrid as $meses => $temperatura) {
     $num_guiones = round(floatval($temperatura));
     $barra = str_repeat("-", $num_guiones);
    echo "<tr>";
    echo "<th>$meses</th>";
    echo "<td>$barra</td>";
    echo "</tr>";
}
echo"</table>";

echo "<h2>ejercicio 8</h2>";
$madrid = array(
    "Enero" => [14.8,-1.8],
    "Febrero" => [19,-1.8],
    "Marzo" => [25.2,-1.6],
    "Abril" => [30.9,5.1],
    "Mayo" => [29.1,8.3],
    "Junio" => [37,13.4],
    "Agosto" => [40,15.1],
    "Setiembre" => [31.6,10.7],
    "Octubre" => [30.1,7.5],
    "Nobiembre" => [18.6,3],
    "Diciembre" =>[13.1,-0.2],
);
echo"<table border =1 > ";
echo"<th>meses</th><th>max</th><th>min</th>";
foreach ($madrid as $meses => $temperatura) {
    echo "<tr>";
    echo "<th>$meses</th>";

    echo "<td>  $temperatura[0]</td>";
    echo "<td>  $temperatura[1]</td>";
    echo "</tr>";
}
echo"</table>";
echo "<h2>ejercicio 9</h2>";

$cartas=[
    "oro",
    "bastos",
    "espadas",
    "bastos",

];
$balor=[
        "As" => 11,
        "2" => 0,
        "3" => 10,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "Sota" => 2,
        "Caballo" => 3,
        "Rey" => 4,
];

$baraja = [];
foreach ($palos as $palo) {
    foreach ($figuras as $nombre => $valor) {
        $baraja[] = [
            'nombre' => $nombre,
            'palo' => $palo,
            'valor' => $valor
        ];
    }
}

// Barajar
shuffle($baraja);

// Elegir 10 cartas al azar
$mano = array_slice($baraja, 0, 10);

// Mostrar las cartas y sumar puntos
$puntosTotales = 0;
echo "<p>Cartas seleccionadas:</p><ul>";
foreach ($mano as $carta) {
    echo "<li>{$carta['nombre']} de {$carta['palo']} - {$carta['valor']} puntos</li>";
    $puntosTotales += $carta['valor'];
}
echo "</ul>";
echo "<p><strong>Puntos totales: $puntosTotales</strong></p>";
?>
 