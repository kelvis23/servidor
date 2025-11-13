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
   
   $s2 = new Square(4.6);
    echo" <br>";
 $s1->noStaticArt=10;
 echo $s1; //estatico 0 - no estatico 10
 $s2->noStaticArt=12;
 echo$s2;//estatico 0 - no estatico 12

 Square::$staticArt =25;
 echo "$s1";//estatico 25 - no estatico 10
 echo "$s2";//estatico 25 - no estatico 12

 echo Square::calculateAreaSide(25);
  ?>
</body>

</html>