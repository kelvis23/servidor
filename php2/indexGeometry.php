<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geometry</title>
</head>

<body>
    <h3>clases :  </h3>
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/php2/Geometry/Square.php";
  


    $s1 = new Square(5);
    echo $s1->calcuteArea();
    $s1->dimeAlgo(); //cuadrado
   
   $s2 = new Square(4,6);
    echo" <br>";
    echo"Atr no estatico s1: $s1->noStaticArt<br>";
    echo"Atr  estatico s2: $s1->StaticArt<br>";

    $s1->noStaticArt++;
    echo"Atr no estatico s1: $s2->noStaticArt<br>";
    echo"Atr  estatico s2: $s2->StaticArt<br>";

  ?>
</body>

</html>