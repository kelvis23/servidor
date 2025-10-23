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
  $futuro = $edad + 10;
  $jubilarse = 60 - $edad;
  echo "actual mente tiene $edad ,dentro de 10 años tendra $futuro te que dan $jubilarse para juvilarse";

  echo "<p>Ejercicio5</p>";

  $precio = 200;

  if ($precio >= 1000) {
    echo "caro";
  } else if ($precio > 100 && $precio < 1000) {
    echo "medio";
  } else if ($precio <= 100 && $precio >= 0) {
    echo "barato";
  } else {
    echo "presio negativo";
  }

  echo "<p>Ejercicio6</p>";
  $hora = 10;
  $minut = 60;
  $secon = 71;

  if ($secon >= 60) {
    $minut++;
    $secon = 0;
    if ($minut >= 60) {
      $hora++;
      $minut = 0;
      if ($hora >= 24) {
        $hora = 0;
      }
    }
  }
  echo "la horaes $hora : $minut : $secon";

  echo "<p>Ejercicio7</p>";

  $num = 10;
  for ($i = 1; $i <= $num; $i++) {
    echo "$i";
  }
  echo "<p>Ejercicio8</p>";
  echo "<ul>";
  for ($i = 9; $i <= 15; $i++) {
    echo "<li> $i</li>";
  }

  echo "</ul>";

  echo "<p>Ejercicio9</p>";
  for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
      echo " $i ,";
    }
  }

  echo "<p>Ejercicio10</p>";
   for ($i = 50; $i >= 20; $i--) {
    if ($i %3!=0 && $i %7!=0) {
      echo " $i ";
    }
  }
    ?>



</body>

</html>