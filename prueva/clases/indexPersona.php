<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            include $_SERVER["DOCUMENT_ROOT"] . "/persona/Persona.php";
            include $_SERVER["DOCUMENT_ROOT"] . "/persona/CuentaBancaria.php";
            include $_SERVER["DOCUMENT_ROOT"] . "/persona/Matematica.php";


            $n1 = new Persona("kelvis",18);
            $n2 = new CuentaBancaria("kelvis",1679);
            $n1->saludar();
            echo"<br>";
            $n2->depositar(50);
            echo "<br>";
            $n2->mostrarSaldo();
            echo "<br>";
            $n2->retirar(80);
             echo "<br>";
            $n2->mostrarSaldo();
             echo "<br>";
            $resultado = Matematica::sumar(5, 7);
            echo "La suma es: " . $resultado;
    ?>
</body>
</html>