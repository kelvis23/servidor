<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ejercicio 1: Bucles anidados </h2>
    <?php
    $rows = 11;
    $columns = 13;

    $filas = $rows % 8 + 4;  //7
    $columnas = $columns % 6 + 5; //6
    
    echo "Primera figura (rectángulo completo):";
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            echo "x";
        }
        echo "<br>";
    }
    echo "Segunda figura (triángulo izquierdo): ";
    echo "<br>";

    $x = 0;
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $x; $j++) {
            if ($x <= $columnas) { //esto permite que se escalonado
                echo "x";
            }
        }
        $x++;
        echo "<br>";
    }



    echo "Tercera figura (marco): <br>";
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if ($i == 0 || $i == $filas - 1 || $j == 0 || $j == $columnas - 1) {
                echo "x";
            } else {
                echo "&nbsp;&nbsp;"; // Esto mantiene el interior vacío (espacios)
    
            }
        }
        echo "<br>";
    }

    echo "Cuarta figura (tablero de ajedrez): <br>";
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "x";
            } else {
                echo "&nbsp;&nbsp;"; // Esto mantiene el interior vacío (espacios)
    
            }
        }
        echo "<br>";
    }


    ?>
    <h2>Ejercicio 2: Arrays bidimensionales</h2>

    <?php
    $temperaturas = [
    ];

    for ($ciudad = 0; $ciudad < 6; $ciudad++) {
        for ($dia = 0; $dia < 6; $dia++) {
            // Generar temperatura aleatoria entre -10 y 45
            $temperaturas[$ciudad][$dia] = rand(-10, 45);
        }
    }

foreach ($temperaturas as $ciudadIndex => $ciudad) {
    echo "Ciudad " . ($ciudadIndex + 1) . ": ";
    echo implode("°C, ", $ciudad) . "°C\n";
    echo"<br>";
}
//​ La temperatura más baja y más alta


// El día con mayor variación térmica
//​ La temperatura media por ciudad

    ?>
</body>

</html>