<?php

session_start();
$email = $name =  "";
$color = "#ff0000";
$tim = 0;
$gluError = "";
$errores = false;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include $_SERVER["DOCUMENT_ROOT"] . "/utils.php";
    $email = secure($_POST["email"]);
    $name = secure($_POST["name"]);
    $tim = secure($_POST['tim']);
    $color = $_POST["color"];



    if (isset($_POST["gluten"])) {
        $gluten = $_POST["gluten"];
    } else {
        $errores = true;
        $gluError = "es obligario selecionar uno de las dos opciones de gluten ";

    }

    //Cokie:
    if(isset($_POST["cookie"])){
        //quiero que dure
        setcookie("receta","valor de la cookie",time()+14*24*60*60 , "/");

    }

    if (!$errores) {
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        $_SESSION["tim"] = $tim;
        $_SESSION["origin"] = "formulario";

        //redirijo:
        header("Location: indexrecipe.php");
        //terminos de el script
        exit();
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styler.css">
</head>

<body>

<!--
    email
    nombre(persona)
    tiempo(number)
    select: vegana, vegetariana, carnivora
    radio : con gluten / sin glunte
    color (imput color)
-->
    
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

        <label for="email">Correo:</label>
        <input type="text" name="email" id="email" value = "<?=$email?>">
        <br>

        <label for="name">Nombre:</label>
        <input type="text" placeholder="Nombre..." name="name" id="name" value = "<?=$name?>">
        <br>

        <label for="tim">tiempo</label>
        <input type="number" name="tim" id="tim" value = "<?=$tim?>" >
        <br>

        <label for="comida">Comida</label>
        <select name="comida" id="comida">
            <option value="vegana">vegana</option>
            <option value="vegetariana" >
                vegetariana
        </option>
            <option value="carnivora">carnivora</option>
        </select>
        <br>

        <input type="radio" id="si" name="gluten" value="si" class="<?= empty($gluError) ? "" : "radioError" ?>">
        <label for="si" class="<?= empty($gluError) ? "" : "radioError" ?>">Con gluten</label>
        <br>
        <input type="radio" id="no" name="gluten" value="no" class="<?= empty($gluError) ? "" : "radioError" ?>">
        <label for="no" class="<?= empty($gluError) ? "" : "radioError" ?>">Sin gluten</label>
        <br>
        <p class="error"><?= $gluError ?></p>



        <label for="color">Elige un color:</label>
        <input type="color" id="color" name="color" value="#ff0000">
        <input type="checkbox" name ="cookie"value =cookie>
        <label for=""></label>
        <br>
        <input type="submit" value="Enviar">
        <input type="root" value="borrar"
    </form>


<!--
    -----
    el action es a este mismo fichero
    verificamos que algun radio haya sido marcado
    verificamos que algun select haya sido marcado
    si esta todo bien -> indexrecipe.php
    si no ->
    -recuperar valores
    -cambiar la clases para que se vea el erro
    -mostrar un mensajito    
-->

</body>

</html>