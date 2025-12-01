<?php
session_start();

$mail = $name= $pass = $type = "";
$mailError = $passError =$typeError="";
$errors = false;

if($_SERVER["REQUEST_METHOD"]=="POST")
    //Ha llegado despues de hacer clic en Submit
   //1.Recojo datos securizado
   include $_SERVER['DOCUMENT_ROOT']. "/utils/functions.php";
   $mail = secure($_POST["email"]); //valor del atributo name del input
   //todo lo del nombre del usuario / email
   $pass =secure($_POST["password"]);
   if(!isset( $_POST["password"])){
    $errors = true;
    $typeError = "tienes que selecionar un metodo";

   }else{
     $type = secure($_POST["login-type"]);
   }

   // 2. Verifico
   if(strlen($name)< 3){
    $nameError = "Error";
   }
   if(strlen($pass)< 3){
    $passError = "Error";
    $errors = true;
   }

   //3. Me voy o muestro errores
if(!$errors){
    $_SESSION["email"] = $email;
    $_SESSION["origin"] = "login";
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Incluir cabecera -->
     <?php include $_SERVER["DOCUMENT_ROOT"]."/resources/views/layouts/header.php" ?>
    <main>

      <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/login.php"; ?>
           
    </main>
    <!-- Incluir footer -->
        <?php include $_SERVER["DOCUMENT_ROOT"]."/resources/views/layouts/footer.php" ?>
</body>

</html>