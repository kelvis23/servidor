<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases</title>
</head>

<body>
    <h3>clases : Deportes </h3>
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/php2/Deportes/Rugby.php";
    include $_SERVER["DOCUMENT_ROOT"]."/php2/Deportes/Tenis.php";
    // $sl = new Sporrt("equipo",true,5); no se puede costruir un objeto de una clase abstracta
    
    //objeto rugby
    $r1 = new Rugby("los pumas ", "equipo", true, 15);
    echo "<p>$r1</p>";
    $r1 -> addPlayers(6);
    echo "<p>$r1</p>"
        ?>
</body>

</html>