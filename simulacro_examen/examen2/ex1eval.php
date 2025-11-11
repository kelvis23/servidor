<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio2</h2>
    <?php
       // include $_SERVER["DOCUMENT_ROOT"]."/simulacro_examen/examen2/clases/Arboles.php";
        include $_SERVER["DOCUMENT_ROOT"]."/clases/Arboles.php";

       // include $_SERVER["DOCUMENT_ROOT"]."/simulacro_examen/examen2/clases/Flores.php";
        include $_SERVER["DOCUMENT_ROOT"]."/clases/Flores.php";

        $n1 = new Flores("rozas",22.8,"marzo");
        $n1->crecer(1.3);
        $n2 = new Arboles("pino",120,true);
        $n3 = new Arboles("roble",250,false);
    ?>
    <ul>
        <li><?php echo $n1 ?></li>
        <li><?php echo $n2 ?></li>
        <li><?php echo $n3 ?></li>
    </ul>
</body>
</html>