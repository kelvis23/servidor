<?php
//include (wquivalente al import de java para añdir otros ficheros)
include("./funsiones.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>funcion </h1>

<body>
    <?php
    //llamo al a funcion shownaame
    showName();
    echo "<br>";
    // se pueden usar las variables declaradas en el fichero 
    var_dump($variable);
    echo "<br>";
    printAddition(7, 9);
    $number = 1;
    $number1 = 2;
    printAddition($number, $number1);
    echo "<br>";
    $resultado = addition(5, 9);
    echo $resultado;
    echo "<br>";
    echo addition(33, 44);
    echo "<br>";
    echo "la suma 6 y 9 es addition(6,9)"; //asi no : la suma de 6 y 9 es addition(6m9)
    echo "<br>";
    echo "la suma 6 y 9 es " . addition(6, 9); //asi  si : suma de 6 y 9 es 15
    
    echo "<br>";
    echo salute("juan");
    echo "<br>";
    echo "juan ", " buenos dias";
    echo "<br>";

    echo intoHem("hola");

    echo matricula("mauricio", "  numansia");

    echo matricula("kelvis", "  ciudad de jaen" , "Asir", "2018");

    ?>
    <h3>paramatros por valor o por referencia</h3>

    <?php

    function imcrement($n){
        $n ++;
        return $n;
    }
    $number = 8;
    imcrement($number);
    echo"<p>$number</p>"; // sale 8 porque pr defecto en las funciones se hace una copia del valor
    // y no trabaja con la propia variavles son los parametros por valor (lotipico)
    //$number = increment($num)


    //para metros por referecia
      function imcrementReference(&$n){
        $n ++;
        return $n;
    }
    $number = 8;
    imcrementReference($number);
    echo"<p>$number</p>"; 



    
    ?>
</body>

</html>