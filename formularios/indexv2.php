<?php
session_start();
//si no ha llegado indexv2  despues del formulario  signuv2 que le devuelva a signuv2.php
if(!isset ($_SESSION["origin"]) or $_SESSION["origin"]!= "signup"){
    header("Location: ./signup/signupv2.php");
 
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
    <h1>bienn</h1>

    <?php
         

var_dump($_POST);
var_dump($_GET);
var_dump($_SESSION);
echo "<p>El nombre introducido era ..</p>";

require "User.php";


       $u = new User($_SESSION["name"], $_SESSION["pass"],$_SESSION["email"],$_SESSION["age"],$_SESSION["studies"]);
        echo "<p>$u</p>";
 

    ?>
</body>
</html>