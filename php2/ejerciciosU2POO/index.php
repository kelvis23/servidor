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
    $n1 = new Empleade("kelvis" ,"moises",30000,[]);
     echo $n1->__tostring();
      echo Empleade::pagarImpuestos(30000);
      echo"<br>";

      $n2 = new Empleade("kelvis" ,"moises",30000,["12345","20708"]);
      $n2->anadirTelefono("67890");
      print_r($n2->getTelefono());
    
      echo"<br>";
      echo $n2->listarTelefonos();
            echo"<br>";
      print_r($n2->vaciarTelefonos());

         echo"<br>";
         $n3 = new Empleade("kelvis" ,"moises",30000,["12345","20708","150604"]);
          echo($n3->toHtml());
    ?>
</body>
</html>