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

    echo"<br>";
    // El día con mayor variación térmica
    $var = 0;
    foreach ($temperaturas as $ciudadIndex => $dia) {
    //    inicializan ambos con el primer valor del array, y luego  se recorre el resto para ver si hay algo menor o mayor.
         $min = $max = $dia[0];
        foreach ($dia as  $temperatura) {
                if ($temperatura < $min) {
                    $min = $temperatura;

                }
                //temperatura maxmima
                if ($temperatura > $max) {
                    $max = $temperatura;

                }
                $v = $max -$min;
            if($v > $var){
                $var = $v;
            }
        }
    }

    echo "La mayor variación de temperatura entre días en una ciudad es: $var";

echo"<br>";
    //​ La temperatura media por ciudad
  foreach ($temperaturas as $ciudadIndex => $dia) {
      $sum = 0;
        foreach ($dia as  $temperatura) {
                $sum += $temperatura;
        }
         $media = $sum/count($dia);
        echo"<br>";
        echo" la ciudad  $ciudadIndex :tiene una media de temeperatura de $media";
    }
/*
    echo"<br>";
        $arr1 = [
            [2, -2, 24, 11, -8, 44],
            [36, 3, 34, 16, 24, 14],
            [41, 42, 18, 3, -4,  4],
            [-1,  -8, 7,  20,  44, 1],
            [29, 16, 35,  3, 7,  29],
            [37, 31, 30, 40, 2, -5]
        ];
        foreach ($arr1 as $ciudadIndex => $temperatura) {
                 echo implode(", ", $temperatura);
        echo "<br>";
                echo "<br>";
        }
     echo "<br>";
     $min =0;
     $max =0;
        foreach ($arr1 as $e => $x ) {
            foreach($x as $valor){
                //temperatura minima
            if($valor <$min){
                $min = $valor;

            }
            //temperatura maxmima
            if($valor >$max){
                $max = $valor;

            }
           }
        }
        //temperatura minima
         echo"$min";
        echo "<br>";
         //temperatura maxmima
         echo"$max";
         
 $v =0;
    $var = 0;
    $min = 0;
    $max = 0;
    foreach ($arr1 as $e => $x) {
        foreach ($x as $c => $t) {
            if ($c) {
                if ($t < $min) {
                    $min = $t;

                }
                //temperatura maxmima
                if ($t > $max) {
                    $max = $t;

                }
                $v = $max -$min;
            }
            if($v > $var){
                $var = $v;
            }
        }
    }
        echo"este es el  con mayor diferesia termica de  $var";
*/

    
    ?>
</body>

</html>