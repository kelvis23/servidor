<?php
$temperaturas = [
    [10, 12, 15, 20, 18, -6],  // Ciudad 0   11
    [9, 11, 14, 19, 17, 15],   // Ciudad 1  5
    [8, 10, 13, 18, 16, 0],   // Ciudad 2  5
    [-1, 9, 12, 17, 15, 23],    // Ciudad 3 25
    [6, 8, 11, 16, 14, 12],    // Ciudad 4 5
    [5, 7, 10, -5, 13, 11],    // Ciudad 5  29
];

// Mostrar temperaturas
foreach ($temperaturas as $ciudadIndex => $dias) {
    echo "Ciudad $ciudadIndex: ";
    foreach ($dias as $diaIndex => $temp) {
        echo "Día $diaIndex = $temp °C, ";
    }
    echo "\n";
}

// Calcular temperatura mínima y máxima global
$min = $temperaturas[0][0];
$max = $temperaturas[0][0];

foreach ($temperaturas as $dias) {
    foreach ($dias as $temp) {
        if ($temp < $min) {
            $min = $temp;
        }
        if ($temp > $max) {
            $max = $temp;
        }
    }
}

echo "\nTemperatura mínima global: $min °C\n";
echo "Temperatura máxima global: $max °C\n";

// Calcular el día con mayor variación térmica
$maxVariacion = 0;
$diaMaxVariacion = 0;

for ($dia = 0; $dia < 6; $dia++) {
    $minDia = $temperaturas[0][$dia];
    $maxDia = $temperaturas[0][$dia];

    for ($ciudad = 1; $ciudad < 6; $ciudad++) {
        if ($temperaturas[$ciudad][$dia] < $minDia) {
            $minDia = $temperaturas[$ciudad][$dia];
        }
        if ($temperaturas[$ciudad][$dia] > $maxDia) {
            $maxDia = $temperaturas[$ciudad][$dia];
        }
    }

    $variacion = $maxDia - $minDia;
    if ($variacion > $maxVariacion) {
        $maxVariacion = $variacion;
        $diaMaxVariacion = $dia;
    }
}

echo "\nEl día con mayor variación térmica es el día $diaMaxVariacion con una variación de $maxVariacion °C\n";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$temperaturas = [
];

for ($ciudad = 0; $ciudad < 6; $ciudad++) {
    for ($dia = 0; $dia < 7; $dia++) {
        // Generar temperatura aleatoria en 6 ciudades distitas
        $temperaturas[$ciudad][$dia] = rand(-10, 45);
    }
}

foreach ($temperaturas as $ciudadIndex => $dia) {
    foreach ($dia as $diaIndex => $temperatura) {
        echo "Ciudad $ciudadIndex, dia $diaIndex: $temperatura \n";

    }
}
//​ La temperatura más baja y más alta

echo "<br>";
$min = 0;
$max = 0;
$minDia = 0;
$maxDia = 0;
$minCiudad = 0;
$maxCiudad = 0;
foreach ($temperaturas as $ciudadIndex => $dia) {
    foreach ($dia as $temperatura) {
        //temperatura minima
        if ($temperatura < $min) {
            $min = $temperatura;
            $minDia = $diaIndex;
            $minCiudad = $ciudadIndex;
        }
        //temperatura maxmima
        if ($temperatura > $max) {
            $max = $temperatura;
             $maxDia = $diaIndex;
            $maxCiudad = $ciudadIndex;

        }
    }
}
//temperatura minima
echo "la minima temperatura es $min";
echo "<br>";
//temperatura maxmima
echo "la maxima temperatura es $max";

echo "<br>";
$var = 0;
$diaMax = 0;
for ($dia = 0; $dia < 6; $dia++) {
    $min1 = $temperaturas[0][$dia];
    $max1 = $temperaturas[0][$dia];
    for ($ciudad = 1; $ciudad < 6; $ciudad++) {
        if ($temperaturas[$ciudad][$dia] < $min1) {
            $min1 = $temperaturas[$ciudad][$dia];
        }
        if ($temperaturas[$ciudad][$dia] > $max1) {
            $max1 = $temperaturas[$ciudad][$dia];
        }
    }
    $v = $max1 - $min1;
    if ($v > $var) {
        $var = $v;
        $diaMax = $dia;
    }
}

echo "La mayor variación es en el día $diaMax con una variación de: $var";

echo "<br>";
//​ La temperatura media por ciudad
foreach ($temperaturas as $ciudadIndex => $dia) {
    $sum = 0;
    foreach ($dia as $temperatura) {
        $sum += $temperatura;
    }
    $media = round($sum / count($dia), 2);
    echo "<br>";
    echo " la ciudad  $ciudadIndex :tiene una media de temeperatura de $media";
}

echo "<br>";
echo "<br>";
//tabla
echo "<p>Temperaturas de ciudades por dia (C)</p>";
echo "<table border 1>";
echo "<tr>";
echo "<th>ciudad/dia</th>";
$primerCiudad = reset($temperaturas);
foreach ($primerCiudad as $dia => $temp) {
    $dias = $dia + 1;
    echo "<th>$dias </th>";
}
echo "<th>Media</th>";
echo "</tr>";

foreach ($temperaturas as $nombreCiudad => $dia) {
    echo "<tr>";
    echo "<td> ciudad $nombreCiudad :</td>";
    foreach ($dia as $diaIndex => $temperatura) {
        echo "<td>$temperatura</td>";
    }
    $sum = 0;
    foreach ($dia as $temperatura) {
        $sum += $temperatura;
    }
    $media = round($sum / count($dia), 2);
    echo "<td>$media</td>";

    echo "</tr>";
}
echo "</table>";
echo"<div>";
echo "<p>estadistica</p>";
echo "<p>Temperatura mínima: $min °C (día". ($minDia+1).", ciudad $minCiudad)</p>";
echo "<p>Temperatura máxima: $max °C (día". ($maxDia +1).", ciudad $maxCiudad)</p>";
echo"</div>";
    ?>