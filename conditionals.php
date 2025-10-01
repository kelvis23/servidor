<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //condisionales
    //en java if (condicion){instruciones} else {intruciones}
    $age = 25;
    if ($age > 30) {
        echo "<p>Notienes abono joven</p>";
    } else {
        echo "<p>si tienes abono joven</p>";

    }

    if ($age < 3) {
        echo "<p>bebe</p>";
    } else if ($age < 10) {
        echo "<p>infatil</p>";
    } else {
        echo "<p>mayor de 10 años</p>";
    }

    $dia = 2;
    switch ($dia) {
        case 1:
            echo "<p>lunes</p>";
            break;
        case 2:
            echo "<p>martes</p>";
            break;
        case 3:
            echo "<p>miercoles</p>";
            break;
        case 4:
            echo "<p>juebes</p>";
            break;
        default:
            echo "<p>fin de semana</p>";
            break; // no es nesesario porque ya termina el bloque
    }

    //si la edad estaentre 5 y 12 años (incluidos ) que salga el mensaje en el colegio
    $age = 6;
    if ($age >= 5 && $age <= 12) {
        echo "<p>esta en el colegio</p>";
    }
    if ($age >= 5 and $age <= 12) {
        echo "<p>esta en el colegio</p>";
    }
    $number = 5;
    if ($number > 3 && $number < 5 || $number == 5) {
        echo "<P>A</P>";
    } else {
        echo "<p>B</p>";
    }

    $number = 7;
    if (!$number == 7) {
        echo "<p>A</p>";
    } else {
        echo "<p>B</p>";
    }


    // operador ternario
    $age = 4;
    $underAge = false;
    if ($age >= 18) {
        $underAge = false;

    } else {
        $underAge = true;
    }

    //operador ternario: (condiones)? instrucionSitrue :intruccinSifalse
    $underAge = ($age >= 18) ? false : true;

    //bucle
    //for , foreach , while do-while
    //for: for(inicialisasazion ;condicion;incrementos)
    //for(int i = 0;i<10;i++)
    //bucle en php que imprima los numeros del 0 al 9
    for ($i = 0; $i < 10; $i++) {
        echo "<p>$i</p>";
    }
    echo "<p>";

    //bucle en php que imprima los numeros pares del 0 al 9
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            echo "$i";
        }
    }
    echo "</p>";

    echo "<p> CON TERNARIO <br>";
    for ($i = 0; $i < 10; $i++) {
        echo ($i % 2 == 0) ? $i : null;
    }
    echo "</P>";
    ?>
    <h3>bUCLES while</h3>
    <?php
    //while(condicion ){}
    /*
    TRASFORMA ESTE BUCLE EN UN WHILE 
     for($i = 0; $i < 10; $i++)
     echo"$i"
    */
    $number = 0;
    while ($number < 10) {
        echo "$number";
        $number++;

    }
    echo "<br>";
    //do-while
    $i = 11;
    do {
        echo "$i";
        $i++;
    } while ($i < 10);
    /* bucle infinito
        do{
            $i =8;
            echo "$i";
            $i++;
        }while($i < 10);ç
        */
    echo "<br>";

    //imprie por pantalla los numeros del 1 al 5 (incluidos dentro de una lista html no ordenada
    echo "<p>Lista no ordenada</p>";
    //demasiado separado
    for ($i = 1; $i < 6; $i++) {
        echo "<ul>
             <li>$i</li>
            </ul>";
    }
    echo "<ul>";
    //este esta vien
    for ($i = 1; $i < 6; $i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";

    echo "<p>otra forma</p>";
    $i = 1;
    echo "<ul>";
    while ($i < 6) {
        echo "<li>";
        echo "$i";
        $i++;
        echo "</li>";

    }
    echo "</ul>";


    // imoprime en una tbal los balores de 
    $course1 = "DWES";
    $course2 = "DWEc";
    $course3 = "Dim";
    $steache1 = "sete";
    $steache2 = "diego";
    $steache3 = "marco";
    echo "<p>tabla</p>";
    echo "
    <table border = 1 >
     <tr>
         <th>Asignatura</th>
         <th>profe</th>
     </tr>

     <tr>
         <td>$course1</td>
         <td>$steache1</td>
     </tr>
     <tr>
         <td>$course2</td>
         <td>$steache2</td>
     </tr>
     <tr>
         <td>$course3</td>
         <td>$steache3</td>
     </tr>
    </table>";
    ?>
    <!--otra forma -->
    <table border="1">
        <tr>
            <th>Asignatura</th>
            <th>profe</th>
        </tr>

        <tr>
            <td><?php echo " $course1"; ?></td>
            <td><?php echo " $steache1"; ?></td>
        </tr>
        <tr>
            <td><?php echo " $course2"; ?></td>
            <td><?php echo " $steache2"; ?></td>
        </tr>
        <tr>
            <td><?php echo " $course3"; ?></td>
            <td><?php echo " $steache3"; ?></td>
        </tr>
    </table>
    <?php
    echo "<br>";
    echo " <table border = 1>";
    echo "<tr><td>numero</td> <td>numero *2</td></tr>";

    for ($i = 1; $i <= 20; $i++) {
        echo "<tr>
                  <td>$i</td>";
        $number = $i * 2;
        echo "<td>$number</td>";
        //echo "<td>$i.*2</td>";
        echo "</tr>";
    }
    echo "</table>";


    /* imprimir los numeros 
    1 2  3  4
    5 6  7  8
    9 10 11 12
    utilisando obligatoriamente bucles anidados
    */

    for ($i = 0; $i <= 2; $i++) { // es to re corre las filas es decir las 1 ,5,9
        for ($j = 0; $j <= 3; $j++) { /// esto recore las columnas es decir  el 1 2 3 4
            echo "a ";
        }
        echo "<br>";
    }

    /* ahora esto :
    0 0 0 0 
    1 1 1 1 
    2 2 2 2  */

    echo "<br>";
    for ($i = 0; $i < 3; $i++) { 
        for ($j = 0; $j < 4; $j++) {
            echo "$i ";
        }
        echo "<br>";
    }

    /* ahora restar esto 
    0 1 2 3 4 5 
    0 1 2 3 4 5  */

    echo "<br>";
    for ($i = 0; $i < 2; $i++) { 
        for ($j = 0; $j < 6; $j++) {
          echo "$j ";
        } 
        echo "<br>";
    }

   /* ahora restar esto 
    0  1  2  3  4 
    5  6  7  8  9
    10 11 12 13 14
    15 16 16 18 19 
    20 21 22 23 24 */

    echo "<br>";
    $a=0;
    for ($i = 0; $i < 5; $i++) { 
        for ($j = 0; $j < 5; $j++) {
            echo "$a ";
            $a++;
        } 
        
        echo "<br>";
    }

    /* 
     0  1  2  3
     3  4  5  6
     6  7  8  9
     9  10 11 12
     12 13 14 15
    */
      echo "<br>";
     echo "<table border = 1 >";
     $n = 0 ;
       for ($i = 0; $i < 5; $i++) { 
        echo"<tr>";
        for ($j = 0; $j < 4; $j++) {
            
            echo "<td>$n</td> ";
            $n++;
        } 
        $n-=1;
        echo "</tr>";
    }
   echo"</table>";
    ?>


</body>

</html>