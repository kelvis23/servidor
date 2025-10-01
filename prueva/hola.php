<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>php</h1>

    <?php
    /* esto es para comentar */
    // esto es un comentario de una linea
    # esto abien es un  cometario en linea
    echo "Hola mundo";
    //variable
    //en java seria String name = "kelvis";
    $name = "KELVIS";
    echo "<br>";
    echo $name;
    echo "<p>hola , me llamo $name </p>";
    echo '<p>hola , me llamo $name </p>';

    // los tipos de las variavles pueden cabiar con una nueva asignasion
    $name = 3;
    echo "<p>hola , me llamo $name </p>";
    ?>

    <h2>mas php</h2>
    <?php
    echo "<p>la variable name tiene: $name</p>";
    echo "<h3>prueba</h3>";
    ?> 

    <?php
     //16/09/25
     echo ("hola es un mensaje.<br><hr>"); 
     echo"otra cosa generada pr php";
     //en java doble number = 12.7
     $number =12.7;
     echo"<p> la variable es :$number</p>";

     $number = "hola";
     echo"<p> la variable es :$number</p>";

     // -- esto daria un error , no aperese el error  pero esta 
     //$number = $number + 3;
     //echo "<p>la variable$number</p>";
     echo"hola ";
     
    ?>
</body>

</html>