<?php
session_start();

if(!isset($_SESSION["origin"]) ){
    header("Location: formrecipe.php");
 
    exit();
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Si no ha llegado a traves del formulario  le redirigimos al formulario  le redirigimos al form recipe</p>
    <p>aqui genero un objeto de la clase recipe  y lo imprimo con su to string </p>
     <?php
    /* include $_SERVER["DOCUMENT_ROOT"] ."/recipes/formrecipe.php";*/
      /*   $r = new Recipe ($n, $e ,$t ,$c ); */

var_dump($_SESSION);
var_dump($_COOKIE)

?>
<a href="closesession.php"> HAz clic aqui para cerra session</a>
</body>
</html>