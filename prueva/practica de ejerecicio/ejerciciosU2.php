<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo ("<p>Ejercicio1</p>");
    $num = 16;
    echo gettype($num), " su valor es $num";
    echo "<br>";
    $num1 = 20.5;
    echo gettype($num1), " su valor es $num1";
    echo "<br>";
    $num2 = "hola";
    echo gettype($num2), " su valor es $num2";
    echo "<br>";
    $num3 = true;
    echo gettype($num3), " su valor es $num3";
    echo "<br>";

    echo ("<p>Ejercicio2</p>");
    $a = 5;
    $b = 2;
    $s = $a ** $b;
    echo "$s";
    echo "<br>";


    echo "<p>Ejercicio3</p>";
    $name = "kelvis";
    $lastname = "moises";
    $age = "2006";
    echo "<table border =1 >";
    echo "<tr>
      <td>Nombre</td>
      <td>$name</td>
      </tr>";
      echo "<tr>
      <td>Apellidos</td>
      <td>$lastname</td>
      </tr>";
      echo "<tr>
      <td>Apellidos</td>
      <td>$$age</td>
      </tr>";
    echo " </table>";

    echo "<p>Ejercicio4</p>";

    $edad = 18;
    $futuro =$edad+10;
    $jubilarse = 60 -$edad;
    echo"actual mente tiene $edad ,dentro de 10 años tendra $futuro te que dad $jubilarse para juvilarse"
        ?>



</body>

</html>