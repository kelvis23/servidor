<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
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
        for ($dia = 0; $dia < 7; $dia++) {
            // Generar temperatura aleatoria en 6 ciudades distitas
            $temperaturas[$ciudad][$dia] = rand(-10, 45);
        }
    }

    // Mostrar temperaturas por ciudad y día
    foreach ($temperaturas as $ciudad => $dias) {
        foreach ($dias as $dia => $temperatura) {
            echo "Ciudad $ciudad, dia $dia: $temperatura \n";

        }
    }
    //​ La temperatura más baja y más alta
    
    echo "<br>";
    $min = $temperaturas[0][0];
    $max = $temperaturas[0][0];
    $minDia = 0;
    $maxDia = 0;
    $minCiudad = 0;
    $maxCiudad = 0;
    foreach ($temperaturas as $ciudad => $dia) {
        foreach ($dia as $diaIndex => $temperatura) {
            //temperatura minima
            if ($temperatura < $min) {
                $min = $temperatura;
                $minDia = $diaIndex;
                $minCiudad = $ciudad;
            }
            //temperatura maxmima
            if ($temperatura > $max) {
                $max = $temperatura;
                $maxDia = $diaIndex;
                $maxCiudad = $ciudad;

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
    $mediaMax = 0;
    $ciudadMaxMedia = 0;
    $medias = [];


    foreach ($temperaturas as $ciudad => $dia) {
        $sum = 0;
        foreach ($dia as $temperatura) {
            $sum += $temperatura;
        }
        $media = round($sum / count($dia), 2);
        $medias[$ciudad] = $media;
        if ($media > $mediaMax) {
            $mediaMax = $media;
            $ciudadMaxMedia = $ciudad;
        }

        echo "<br>";
        echo " la ciudad  $ciudad :tiene una media de temeperatura de $media";
    }

    echo "<br>";
    echo "<br>";
    //tabla
    echo "<p>Temperaturas de ciudades por dia (C)</p>";
    echo "<table border 1>";
    echo "<tr>";
    echo "<th  style='background-color: #e0e0e0;'>ciudad/dia</th>";
    $primerCiudad = reset($temperaturas);
    foreach ($primerCiudad as $dia => $temp) {
        $dias = $dia + 1;
        if ($dia >= 0 && $dia <= 4) {
            echo "<th style='background-color: #e0e0e0;'>dia $dias</th>";
        } else {
            echo "<th style='background-color: #c6f5c6;'> dia $dias </th>";
        }
    }
    echo "<th  style='background-color: #e0e0e0;'>Media</th>";
    echo "</tr>";

    foreach ($temperaturas as $nombreCiudad => $dia) {

        echo "<tr ></tr>";
        echo "<td style='background-color: lightblue ;'> ciudad $nombreCiudad :</td>";
        foreach ($dia as $diaIndex => $temperatura) {
            // Determinar color del texto
            $colorTexto = "";
            if ($temperatura < 0) {
                $colorTexto = "color: blue;";
            } elseif ($temperatura > 35) {
                $colorTexto = "color: red;";
            }

            // Determinar color de fondo
            $fondo = "";
            if ($nombreCiudad == $ciudadMaxMedia) {
                $fondo = "background-color: #ffffcc;";
            } elseif ($diaIndex == 5 || $diaIndex == 6) {
                $fondo = "background-color: #c6f5c6;";
            }

            // Imprimir celda con estilo combinado
            echo "<td style='$fondo $colorTexto'>$temperatura</td>";
        }

        echo "<td>{$medias[$nombreCiudad]}</td>";

        echo "</tr>";
    }
    echo "</table>";
    echo "<div>";
    echo "<p>estadistica</p>";
    echo "<p><strong>Temperatura mínima: </strong> $min °C (día" . ($minDia + 1) . ", ciudad $minCiudad)</p>";
    echo "<p><em style='color:brown;'>Temperatura máxima:</em> <em style='color:brown;'>$max °C</em> (día " . ($maxDia + 1) . ", ciudad $maxCiudad)</p>";
    echo "</div>";
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
    

    echo "<br> ";
    $numero = 9;

    $array = [
        "pablo" => 9,
        "mario" => 5,
        "ana" => 10,
        "cesar" => 6,
    ];
    $resultado = union($numero, $array);
    echo $resultado;
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


    echo "  <h3>Ejercicio 4.1s </h3>";

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
    //crea una tabla de estudiantes con  nombre  ,clase, matematica, hitoria ,ciencia, arte
    include("./studentsKM.php");
    // esto es para  sacar la materias  del array
    $materias = [];
    foreach ($school as $estudiante) {
        foreach ($estudiante as $clave => $valor) {
            // Si la clave NO es 'nombre' ni 'clase' y además no está ya en $materias,
            // entonces es una materia nueva y la añadimos al array $materias
            if (!in_array($clave, ['nombre', 'clase']) && !in_array($clave, $materias)) {
                $materias[] = $clave;
            }
        }
    }
    $mejores_notas = mejor_nota_por_materia($school);
    // Generar tabla
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<thead><tr><th>Nombre</th>";

    // Encabezados de materias
    foreach ($materias as $materia) {
        echo "<th>" . ucfirst($materia) . "</th>";
        //ucfirst es una función que convierte la primera letra de una cadena de texto a mayúscula, dejando el resto igual.
    }
    echo "<th> clase</th>";
    echo "<th> media</th>";

    echo "</tr></thead><tbody>";

    // Cuerpo de la tabla con los datos
    foreach ($school as $estudiante) {
        echo "<tr>";
        // Mostramos el nombre del estudiante, con primera letra en mayúscula
        echo "<td>" . ucfirst($estudiante['nombre']) . "</td>";

        $suma = 0;
        $count = 0;

         // Recorremos todas las materias para mostrar la nota 
        foreach ($materias as $materia) {
            if (isset($estudiante[$materia])) { // Si el estudiante tiene nota en esa materia
                $nota = $estudiante[$materia];
                $class = '';

                 // Asignamos una el color rojo con css para destacar suspensos (nota <= 4)
                if ($nota <= 4) {
                    $class = 'suspenso';
                }
                  // Si la nota es la mejor nota de esa materia, la destacamos con color verde en css
                 elseif ($nota == $mejores_notas[$materia]['nota']) {
                    $class = 'mejor-nota';
                }

                 // Imprimimos la nota con la clase CSS correspondiente
                echo "<td class=\"$class\">$nota</td>";
                $suma += $nota;
                $count++;
            } else {
                 // Si no tiene nota en esa materia, mostramos un guion y clase vacía de color negro
                echo "<td class=\"vacio\">-</td>";
            }
        }

           // Mostramos la clase a la que pertenece el estudiante
        echo "<td>" . ucfirst($estudiante['clase']) . "</td>";

          // Obtenemos las peores medias por clase
        $peores = peor_media_por_clase($school);
        
        // Calculamos la media del estudiante redondeada a dos decimales, o '-' si no hay notas
        $media = $count > 0 ? round($suma / $count, 2) : '-';
        $clase = $estudiante['clase'];

        // Comprobamos si este estudiante tiene la peor media en su clase
        $esPeorMedia = $media === $peores[$clase]['promedio'] && $estudiante['nombre'] === $peores[$clase]['nombre'];

        // Si tiene la peor media,  mostrar en naranja
        $claseCssMedia = $esPeorMedia ? 'peor-media' : '';

        echo "<td class='$claseCssMedia'>$media</td>";


        echo "</tr>";
    }


    echo "</tbody></table>";
    ?>
</body>

</html>