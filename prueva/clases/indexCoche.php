<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/veiculo/Vehiculo.php";

        $n1 = new Coche("nisan","Gtr",150);

        echo"$n1 <br>";

        $coche1 = new Coche("Toyota", "Corolla");

        $coche1->acelerar(50);
        echo "$coche1 <br>";

        $coche1->frenar(20);
       echo "$coche1<br>";
       
       $coche1->frenar(40);
       echo "$coche1<br>";
   ?>
</body>
</html>