<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //bol
    $underAge = true;
    $type = gettype($underAge);// devuelve un string con el tipo de la varible
    echo $type;
    echo"<br>";

    //int
    $number=14;
    echo gettype($number);
    echo"<br>";

    //float
    $decimal = 14.1;
    var_dump($decimal);// imprime por pantalla el tipo y el valor
    echo"<br>";

    //string
    $text = "esto es una cadena de texto";
    //concatenar es el operador .
    $text = $text ." - fin";
    var_dump($text);

   // $a; //variable no inicianlizada
   //var_dump($a);
        echo"<br>";

    //CONSTANTE
    const GROUP = "2DAW";
    //echo"el grupo es GROUP";
    //edho "el grupo es $GROUP";
    echo"el grupo es", GROUP;
    echo"<br>";

    $mod = 7%5;
    var_dump($mod);
    $pow = 4**3;
    var_dump($pow);


    echo"<br>";
    $a =4;
    $a++; // in crementa 1
    var_dump($a);
    ++$a; //incrementa en 1
    var_dump($a);

    echo "<br>";
    echo"<br>";
    echo"<br>";
    $x = 5;
    $y = $x++;
    echo"x=$y";
    echo"<br>";
    echo"x=$x"; 
    //precausion con x++ y ++x
    $age =9;
    echo "la edad de esa persona es ", $age++,"<br>";  // sale 9 porque primero se imprime y luego se suma
    echo "y ahora la edad de esa persona es", $age,"<br>"; // sale 10 , proque en la linea antrior incrementa en 1 su valor

    $a = 4;
    $a += 9; // equibale a $a = $a +9
    $a /= 24;// equibale a $a = $a /24
    $text="hola";
    $text.= "y adios";
    var_dump($text); // hola y adios

    // operadores de comparacion
    $a = 4;
    $b = 4;
    $comp = $a == $b ; //true
    var_dump($comp);
    echo "<br>";

    $comp = $a > $b ; // false
    var_dump($comp);
    echo "<br>";

    $comp = $a >= $b ; // true
    var_dump($comp);
    echo "<br>";

    $comp = $a != $b ; // distinto
    var_dump($comp); //false

    echo"<P>nave espacial</P>";
    $comp = $a <=> $b ;
    var_dump( $comp );







    ?> 
</body>
</html>