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
    $numero1[] = random_int(0, 100);
}
echo "<p>" . implode(" , ", $numero1) . "</p>";

for ($i = 0; $i < count($numero1); $i++) {
    $a = $numero1[$i] ** 2;
    $cuadrdo[] = $a;
}
echo "<p>" . implode(" , ", $cuadrdo) . "</p>";

for ($i = 0; $i < count($numero1); $i++) {
    $a = $numero1[$i] ** 3;
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

echo "<table border = 1>";
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


echo "<table border =1 > ";

foreach ($madrid as $meses => $temperatura) {
    $num_guiones = round(floatval($temperatura));
    $barra = str_repeat("-", $num_guiones);
    echo "<tr>";
    echo "<th>$meses</th>";
    echo "<td>$barra</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h2>ejercicio 8</h2>";
$madrid = array(
    "Enero" => [14.8, -1.8],
    "Febrero" => [19, -1.8],
    "Marzo" => [25.2, -1.6],
    "Abril" => [30.9, 5.1],
    "Mayo" => [29.1, 8.3],
    "Junio" => [37, 13.4],
    "Agosto" => [40, 15.1],
    "Setiembre" => [31.6, 10.7],
    "Octubre" => [30.1, 7.5],
    "Nobiembre" => [18.6, 3],
    "Diciembre" => [13.1, -0.2],
);
echo "<table border =1 > ";
echo "<th>meses</th><th>max</th><th>min</th>";
foreach ($madrid as $meses => $temperatura) {
    echo "<tr>";
    echo "<th>$meses</th>";

    echo "<td>  $temperatura[0]</td>";
    echo "<td>  $temperatura[1]</td>";
    echo "</tr>";
}
echo "</table>";
echo "<h2>ejercicio 9</h2>";

$palos = [
    "oro",
    "bastos",
    "espadas",
    "copas",

];
$numeros = [
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
$puntos = 0;
$cartas = [];
$cartasv2 = [];
$keys = array_keys($numeros);

for ($i = 0; $i < 10; $i++) {
    //vale cualqueirade los dos rand y randont_int()
    $n = rand(0, count($numeros) - 1);//randon etre el 0 y 9
    $p = random_int(0, count($palos) - 1);//randon etre el 0 y 3 ( el -1 espor los idices que empisan en 0)
    $nombreCarta = $keys[$n];              // Ej: "As"
    $valor = $numeros[$nombreCarta];       // Ej: 11
    $palo = $palos[$p];                    // Ej: "oro    

    $cartas[] = "$nombreCarta de $palo";
    $cartasv2[] = [$nombreCarta, $valor, $palo];
    $puntos += $valor;
    // tambie en puedes 
    /*
    echo"<ul><li>"
    echo $nombreCarta."que tiene".puntos."puntos, es del palo ".$palo
    echo"</ul></li>"
    */
}

echo "<p>Aquí hay 10 cartas aleatorias:</p><ul>";
foreach ($cartas as $c) {
    echo "<li>$c</li>";
}
echo "</ul>";
echo "<p>Aquí hay 10 cartas aleatorias con la versión 2:</p><ul>";
foreach ($cartasv2 as $c) {
    echo "<li> $c[0] de $c[2]. Son $c[1] puntos</li>";
}
echo "</ul>";
echo "<p>El total de puntos es $puntos.</p>";



echo "<h2>ejercicio 10</h2>";

$palos = [
    "oro",
    "bastos",
    "espadas",
    "copas",

];
$numeros = [
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
$puntos = 0;
$cartas = [];
$cartasv2 = [];
$carta = [];
$keys = array_keys($numeros);

for ($i = 0; $i < 10; $i++) {
    //vale cualqueirade los dos rand y randont_int()
    $n = rand(0, count($numeros) - 1);//randon etre el 0 y 9
    $p = random_int(0, count($palos) - 1);//randon etre el 0 y 3 ( el -1 espor los idices que empisan en 0)
    $nombreCarta = $keys[$n];              // Ej: "As"
    $valor = $numeros[$nombreCarta];       // Ej: 11
    $palo = $palos[$p];                    // Ej: "oro    

    $cartas[] = "$nombreCarta de $palo";
    $carta[] = "$nombreCarta de $palo";


    if (in_array($carta, $cartas)) {
        $i--;
    } else {
        $cartasv2[] = "$nombreCarta de $palo  que tiene un valor de $valor";
        $puntos += $valor;
    }
}

echo "<p>Aquí hay 10 cartas aleatorias:</p>";
foreach ($carta as $c) {
    echo "<li>$c</li>";
}

echo "<p>Aquí hay 10 cartas aleatorias con su valor:</p>";

foreach ($cartasv2 as $x) {
    echo "<li>$x</li>";
}
echo "<h2>ejercicio 11</h2>";
$discionarrio = [
    "Casa" => "House",
    "Perro" => "Dog",
    "Libro" => " Book",
    "Agua" => "Water",
    "Amigo" => "Friend",
    "Comida" => "Food",
    "Escuela" => "School",
    "Cielo" => "Sky",
    "Feliz" => "Happy",
    "Trabajo" => "Work",
];

$keys = array_keys($discionarrio);
$d = rand(0, count($discionarrio) - 1);
$palabra = $keys[$d];
$traducion = $discionarrio[$palabra];

echo "$palabra es $traducion en ingles";

echo "<h2>ejercicio 12</h2>";

/*hay varias formas otraq formas que puede ser mas facil de entender es pidiendo  random (0,500);
despues que me lo desordene   y que de los 500 solamente me des 100 el resto es igual 

*/

$count = 0;
$arr1 = [];

for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = [];
    for ($j = 0; $j < 10; ) {
        $n = rand(0, 500);
        //fucionar dos arrays 
        $flatArray = array_merge(...$arr1);
        if (!in_array($n, $flatArray)) {
            $arr1[$i][$j] = $n;
            $j++;
        } else {
            $count++;
        }
    }

}
echo "<table border =1>";
for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 10; $j++) {
        echo "<td>{$arr1[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h2>ejercicio 13</h2>";

$promedio = 0;

for ($i = 0; $i < count($estudiantes); $i++) {
    //$estudiantes[$i] es el array del estudiante en la posición $i
    //Con las claves "matematicas", "historia" y "programacion" accedemos a sus respectivas notas.
    $promedio = (
        $estudiantes[$i]["matematicas"] +
        $estudiantes[$i]["historia"] +
        $estudiantes[$i]["programacion"]
    ) / 3;
    // Agregamos el promedio al array del estudiante
    $estudiantes[$i]["promedio"] = round($promedio, 2);
    //Concatenamos el texto con el nombre del estudiante ($estudiantes[$i]["nombre"]).round($promedio, 2) redondea el promedio a 2 decimales para que se vea más limpio.
    echo "El promedio de " . $estudiantes[$i]["nombre"] . " es " . round($promedio, 2) . "<br>";
}
$maxPromedio = 0;
$mejorEstudiante = "";
for ($i = 0; $i < count($estudiantes); $i++) {
    if ($estudiantes[$i]["promedio"] > $maxPromedio) {
        $maxPromedio = $estudiantes[$i]["promedio"];
        $mejorEstudiante = $estudiantes[$i]["nombre"];
    }
}
echo "<br>El estudiante con el promedio más alto es $mejorEstudiante con un promedio de $maxPromedio.";

$count = 0;
for ($i = 0; $i < count($estudiantes); $i++) {
    if ($estudiantes[$i]["matematicas"] >= 7) {
        if ($estudiantes[$i]["historia"] >= 7) {
            if ($estudiantes[$i]["programacion"] >= 7) {
                $count++;
            }
        }
    }
}
echo "<br> hay $count estudiante que tiene  mas de 7 en todas las materias";


$maximo = [];
$maxm = 0;
$maxh = 0;
$maxp = 0;
for ($i = 0; $i < count($estudiantes); $i++) {
    if ($estudiantes[$i]["matematicas"] > $maxm) {
        $maxm = $estudiantes[$i]["matematicas"];
    }
    if ($estudiantes[$i]["historia"] > $maxh) {
        $maxh = $estudiantes[$i]["historia"];
    }
    if ($estudiantes[$i]["programacion"] > $maxp) {
        $maxp = $estudiantes[$i]["programacion"];
    }
    $maximo["matematica"] = round($maxm);
    $maximo["historia"] = round($maxh);
    $maximo["programasion"] = round($maxp);


}
echo "<br>la nota maxima de matematicas  es $maximo[matematica]  en hestoria  $maximo[historia] y en programasion $maximo[programasion]";

usort($estudiantes, function ($a, $b) {
    return $b['promedio'] <=> $a['promedio']; // Orden descendente
});

// Finalmente, imprimimos la lista ordenada
echo "<h3>Estudiantes ordenados por promedio descendente:</h3>";
foreach ($estudiantes as $est) {
    echo $est['nombre'] . " - Promedio: " . $est['promedio'] . "<br>";
}

echo "<h2>ejercicio 14</h2>";

$hotel = [
    "habitaciones" => [
        101 => ["tipo" => "individual", "precio" => 50, "ocupada" => false, "dias_ocupada" => 0],
        102 => ["tipo" => "doble", "precio" => 80, "ocupada" => true, "dias_ocupada" => 3],
        103 => ["tipo" => "suite", "precio" => 150, "ocupada" => false, "dias_ocupada" => 0],
        201 => ["tipo" => "individual", "precio" => 50, "ocupada" => true, "dias_ocupada" => 5],
        202 => ["tipo" => "doble", "precio" => 80, "ocupada" => false, "dias_ocupada" => 0],
        203 => ["tipo" => "suite", "precio" => 150, "ocupada" => true, "dias_ocupada" => 2]
    ],
    "reservas" => [
        ["habitacion" => 102, "cliente" => "Juan Pérez", "dias" => 3],
        ["habitacion" => 201, "cliente" => "María López", "dias" => 5],
        ["habitacion" => 203, "cliente" => "Carlos Ruiz", "dias" => 2]
    ]
];

// La variable $hotel es un array asociativo con claves "habitaciones" y "reservas", no es un array indexado con números.
//Por eso, hacer for ($i = 0; $i < count($hotel); $i++) no funciona aquí, porque $hotel[0], $hotel[1], etc. no existen.
foreach ($hotel["habitaciones"] as $numHabitacion => $habitaciones) {
    if ($habitaciones["tipo"] == "individual") {
        if ($habitaciones["ocupada"] == false) {
            echo "disponible la habitasion $numHabitacion";
        }
    }
}

$ingresos =0;
foreach ($hotel["habitaciones"] as $numHabitacion => $habitaciones) {
$ingresos += $habitaciones["precio"];
}
echo "<br>el hotel a ganado $ingresos";

foreach ($hotel["reservas"] as $reserva) {
    
  
}

?>