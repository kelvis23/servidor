<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
       include $_SERVER["DOCUMENT_ROOT"]  ."/Empleados/Trabajable.php";
        include $_SERVER["DOCUMENT_ROOT"] ."/Empleados/EmpleadoFijo.php";
        include $_SERVER["DOCUMENT_ROOT"] ."/Empleados/EmpleadoPorHoras.php";
        
        $n1 = new EmpleadoFijo("paco",23,680);
        $n2 = new EmpleadoPorHoras("maria",17,6,50);
        $empleado1 = new EmpleadoFijo("Ana", 30, 1800);
        $empleado2 = new EmpleadoPorHoras("Luis", 22, 120, 12);
      
       echo $empleado1->getResumen() . "<br>";
       echo $empleado2->getResumen() . "<br>";
   ?>
</body>
</html>