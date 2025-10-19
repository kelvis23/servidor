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
    
    echo "Primera figura (rectángulo completo): <br>";
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
    /* otra forma
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $i; $j++) {
               //esto permite que se escalonado
                    echo "x";

            }

            echo "<br>";
        }*/



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
    foreach ($temperaturas as $ciudadIndex => $dia) {
        foreach ($dia as $temperatura) {
            //temperatura minima
            if ($temperatura < $min) {
                $min = $temperatura;

            }
            //temperatura maxmima
            if ($temperatura > $max) {
                $max = $temperatura;

            }
        }
    }
    //temperatura minima
    echo "la minima temperatura es $min";
    echo "<br>";
    //temperatura maxmima
    echo "la maxima temperatura es $max";

    echo "<br>";
    //comprovar creo que eror
    // El día con mayor variación térmica 
    $var = 0;
    foreach ($temperaturas as $ciudadIndex => $dia) {
        //    inicializan ambos con el primer valor del array, y luego  se recorre el resto para ver si hay algo menor o mayor.
        $min = $max = $dia[0];
        foreach ($dia as $temperatura) {
            if ($temperatura < $min) {
                $min = $temperatura;

            }
            //temperatura maxmima
            if ($temperatura > $max) {
                $max = $temperatura;

            }
            $v = $max - $min;
            if ($v > $var) {
                $var = $v;
            }
        }
    }

    echo "La mayor variación de temperatura entre días en una ciudad es: $var";

    echo "<br>";
    //comprovar creo que eror
    //​ La temperatura media por ciudad
    foreach ($temperaturas as $ciudadIndex => $dia) {
        $sum = 0;
        foreach ($dia as $temperatura) {
            $sum += $temperatura;
        }
        $media = $sum / count($dia);
        echo "<br>";
        echo " la ciudad  $ciudadIndex :tiene una media de temeperatura de $media";
    }

    echo "<br>";
    $var = 0;
    foreach ($temperaturas as $ciudadIndex => $dia) {
        echo "<table border = 1";
        $min = $max = $dia[0];
        foreach ($dia as $temperatura) {
            if ($temperatura < $min) {
                $min = $temperatura;

            }
            //temperatura maxmima
            if ($temperatura > $max) {
                $max = $temperatura;

            }
            if ($temperatura < 0) {
                $temperatura;

            }
            //temperatura maxmima
            if ($temperatura > 35) {
                $temperatura;

            }
            $v = $max - $min;
            if ($v > $var) {
                $var = $v;
            }
        }
    }

    ?>
    <h2>Ejercicio 3: Funciones</h2>
    <?php

    include("./functionsKM.php");
    echo "<br>";
    $numeros = [1, 2, 3, -4, 5, 6, -7, 8, 0, -11];
    print_r(filterByType($numeros, "par"));
    echo "<br>";
    print_r(filterByType($numeros, 'impar'));
    echo "<br> ";
    print_r(filterByType($numeros, 'primo'));
    echo "<br> ";
    print_r(filterByType($numeros, 'positivo'));
    echo "<br> ";
    print_r(filterByType($numeros, 'negativo'));


    echo "<br> ";
    $numero1 = [1, 2, 3, -4, 5, 6, -7, 8, 0, 2];
    print_r(calculateStatistics($numero1));

    echo "<br> ";
    print_r(analizarPalabras("hola estoy practicando"));
    echo "<br> ";
    echo convertTemperature(25, "celsius", "fahrenheit");  // 77
    echo "<br> ";
    echo convertTemperature(77, "fahrenheit", "celsius");  // 25
    echo "<br> ";
    echo convertTemperature(25, "celsius", "kelvin");     // 298.15
    echo "<br> ";
    echo convertTemperature(298.15, "kelvin", "celsius"); // 25
    

    //preguntar a sete
    $numero = 8;

    $array = [
        "pablo" => 9,
        "mario" => 5,
        "ana" => 10,
        "pablo" => 9,
        "cesar" => 6,
    ];
    echo (union($numero, $arr1))
        ?>


    <h2>Ejercicio 4: Arrays asociativos </h2>
    <?php

    include("./shopKM.php");
    echo "<table border = 1 >";
    foreach ($productos as $keys => $producto) {
        $nombreCapitalizado = ucfirst($producto['nombre']);
        echo "<tr>";
        echo "<td>$nombreCapitalizado</td>";
        echo "</tr>";

        echo "<tr>";
        $precioProducto = $producto['precio'];
        $precioConIVA = calculateIVA($precioProducto);
        echo "<td>Precio con IVA: $precioConIVA</td>";
        echo "</tr>";

        echo "<tr>";
        if ($producto["stock"] > 10) {
            echo "<td style='background-color: green;>$producto[stock] </td>";
        }
        if ($producto["stock"] > 0) {
            echo "<td style='background-color: yellow;'>$producto[stock] </td>";
        }

        if ($producto["stock"] == 0) {
            echo "<td style='background-color: red;'>$producto[stock]</td>";
        }

        echo "</tr>";
    }
    echo "</table>";


    echo "  <h2>Ejercicio 4.1s </h2>";

    echo "<table border='1'>";
    foreach ($productosConDescuento as $key => $producto) {
        $nombreCapitalizado = ucfirst($producto['nombre']);
        echo "<tr>";
        echo "<td>$nombreCapitalizado</td>";
        echo "</tr>";


        $precioProducto = $producto['precio'];
        $precioConIVA = calculateIVA($precioProducto);

        echo "<tr>";
        if (isset($producto['descuento'])) {
            $descuento = $producto['descuento'];
            $precioConDescuento = $precioConIVA - ($precioConIVA * ($descuento / 100));

            echo "<td><strike>¡" . formatPrice($precioConIVA) . "</strike> " . formatPrice($precioConDescuento) . " (Descuento $descuento%)</td>";
        } else {
            echo "<td>Precio con IVA: $precioConIVA</td>";
        }
        echo "</tr>";


        echo "<tr>";
        if ($producto["stock"] > 10) {
            echo "<td style='background-color: green;'>$producto[stock]</td>";
        }
        if ($producto["stock"] > 0 && $producto["stock"] <= 10) {
            echo "<td style='background-color: yellow;'>$producto[stock]</td>";
        }
        if ($producto["stock"] == 0) {
            echo "<td style='background-color: red;'>$producto[stock]</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <h2>Ejercicio 5: Cumplir requisitos </h2>
    <?php 
    
    
    ?>
</body>

</html>