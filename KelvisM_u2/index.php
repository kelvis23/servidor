<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include $_SERVER["DOCUMENT_ROOT"] . "/classes/Moviles.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/classes/Ordenadores.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/classes/Usaries.php";

    $u1 = new Usaries(124, "kelvis", []);
    $u2 = new Usaries(117, "ana", [""]);

    $u1->nuevoDispositivo( new Moviles(53743,"aple","16x",1553298,20));
    $u1->nuevoDispositivo( new Moviles(1328,"sansuc","Galaxy",174259,18));
    $u1->nuevoDispositivo( new Moviles(53489,"aple","15x",13944,19));
    $u1->nuevoDispositivo( new  Ordenadores(4813,"aple","pro",60,20));
    $u2->nuevoDispositivo( new Ordenadores(129343,"lenovo","gt9",86,true));
    $u2->nuevoDispositivo( new Ordenadores(13834,"lenovo","gt9",150,false));
    
    

    echo "<details>";
    echo "<summary>Ver información del usuario</summary>";
    echo "<div>";
    echo $u1;
    echo "</div>";
    echo "</details>";
    echo"<br>";
    echo"<br>";
    echo "<details>";
    echo "<summary>Ver información del usuario</summary>";
    echo "<div>";
    echo $u2;
    echo "</div>";
    echo "</details>";

    
    
   $resultado =$u1->resiverNumero(129343);

   if($resultado ==1){
    echo"el numero coinside  con el numero de serie de asociado con este usuario";
   }else{
     echo"el numero  no ro coinside  con el numero de serie de asociado con este usuario";
    }




    
    ?>

    
</body>

</html>