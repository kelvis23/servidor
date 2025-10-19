<?php

function filterByType($arr1, $tipo)
{
    $resultado = [];
    foreach ($arr1 as $numero) {
        switch ($tipo) {
            case 'par':
                if ($numero % 2 === 0) {
                    $resultado[] = $numero;
                }
                break;

            case 'impar':
                if ($numero % 2 !== 0) {
                    $resultado[] = $numero;
                }
                break;

            case 'primo':
                if ($numero >= 2) {
                    $esPrimo = true;
                    for ($i = 2; $i <= sqrt($numero); $i++) {
                        if ($numero % $i === 0) {
                            $esPrimo = false;
                            break;
                        }
                    }
                    if ($esPrimo) {
                        $resultado[] = $numero;
                    }
                }
                break;

            case 'positivo':
                if ($numero > 0) {
                    $resultado[] = $numero;
                }
                break;

            case 'negativo':
                if ($numero < 0) {
                    $resultado[] = $numero;
                }
                break;
        }
    }

    return $resultado;
}



//Media: es el promedio de todos los datos de la muestra.
//Mediana: es el valor del medio de todos los datos ordenados de menor a mayor.
//Moda: es el valor que más se repite del conjunto de datos.
function calculateStatistics($arr1)
{
    // Media
    $resultado = [];
    $sum = 0;
    for ($i = 0; $i < count($arr1); $i++) {
        $sum += $arr1[$i];
    }
    $med = $sum / count($arr1);
    $resultado["media"] = $med;


    // Mediana
    sort($arr1);
    $n = count($arr1);
    $medio = floor($n / 2);
    if ($n % 2 === 0) {
        // Si es par, media de los dos del centro
        $media = ($arr1[$medio - 1] + $arr1[$medio]) / 2;
    } else {
        // Si es impar, valor del medio
        $media = $arr1[$medio];
    }
    $resultado["mediana"] = $media;


    // Moda
    $frecuencias = array_count_values($arr1);
    arsort($frecuencias); // Ordena de mayor a menor frecuencia
    $moda = array_key_first($frecuencias); // Toma el primer valor (el más frecuente)
    $resultado["nota"] = $moda;


    return $resultado;
}

function analizarPalabras($text)
{
    $resultado = [];
    // Dividir el texto en palabras usando espacios como separador
    $palabras = preg_split("/\\s+/", trim($text));

    $number_of_words = count($palabras);

    $resultado["numero"] = $number_of_words;

    $longest_word = $palabras[0];
    $shortest_word = $palabras[0];
    foreach ($palabras as $word) {
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
        if (strlen($word) < strlen($shortest_word)) {
            $shortest_word = $word;
        }
    }
    $resultado["mas_larga"] = $longest_word;
    $resultado["mas_corta"] = $shortest_word;
    return $resultado;

}

function convertTemperature($temperatura, $origen = " celsius", $destino = "fahrenheit")
{
    $tn = 0;
    $tf = 0;

    if ($origen == "celsius" && $destino == "kelvin") {
        $tn = $temperatura + 273.15;
        return $tn;

    } else if ($origen == "kelvin" && $destino == "celsius") {
        $tn = $temperatura - 273.15;
        return $tn;

    } else if ($origen == "kelvin" && $destino == "fahrenheit") {
        $tn = $temperatura - 273.15; //  convierte vierte kelvis a celsiu
        $tf = ($tn * (9 / 5)) + 32;// Luego, convierte de Celsius a Fahrenheit
        return $tf;

    } else if ($origen == "fahrenheit" && $destino == "kelvin") {
        $tf = (5 / 9) * ($temperatura - 32); //Convierte de Fahrenheit a Celsius:
        $tn = $tf + 273.15; //Luego, convierte de Celsius a Kelvin:
        return $tn;

    } else if ($origen == "fahrenheit" && $destino == "celsius") {
        $tn = (5 / 9) * ($temperatura - 32);
        return $tn;

    } else if ($origen == "celsius" && $destino == "fahrenheit") {
        $tn = ($temperatura * (9 / 5)) + 32;
        return $tn;

    } else {
        return false;
    }

}

//preguntar a sete  el 5
function  union ($num ,$arr1){
      foreach ($arr1 as $nombre => $valor) {
        if ($valor == $num) {
            return $nombre;  // Devuelve el nombre si encuentra el número
        }
}
 // Si no encuentra el número, devuelve un mensaje
    return "No se encontró a nadie con ese número.";
} 



?>