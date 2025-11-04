<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include $_SERVER["DOCUMENT_ROOT"]."/php2/ejerciciosU2POO/clases/Empleade.php";
    $n1 = new Empleade("kelvis" ,"moises",30000);
     echo $n1->__tostring();
      echo Empleade::pagarImpuestos(30000);
    ?>
</body>
</html>