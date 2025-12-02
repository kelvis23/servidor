<?php
session_start();

$mail = $name = $pass = $type = "";
$mailError = $passError = $typeError = "";
$errors = false;

//verificar si esta si esta la cookie de que ya ha iniciado sesion 
//Si esta , le llevo  al index
//si no , no hago nada 
if(isset($_COOKIE["stay-connected"])){
  $_SESSION["email"] =$_COOKIE["stay-connected"];
  $_SESSION ["origin"] = "login";
  header("Location: index.php");
  exit ();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Ha llegado despues de hacer clic en Submit
  //1.Recojo datos securizado
  include $_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php";
  $mail = secure($_POST["email"]); //valor del atributo name del input
  //todo lo del nombre del usuario / email
  $pass = secure($_POST["password"]);
  if (!isset($_POST["password"])) {
    $errors = true;
    $typeError = "tienes que selecionar un metodo";
  } else {
    $type = secure($_POST["login-type"]);
  }

  // 2. Verifico
  if (strlen($mail) < 3) {
    $mailError = "Error";
    $errors = true;
  }
  if (strlen($pass) < 3) {
    $passError = "Error";
    $errors = true;
  }
  //todo en algun momento verificaremos con la bd
  //que existe ese usuario y contraseña

  //toda cookie de seguir conectado

  //3. Me voy o muestro errores
  if (!$errors) {
    //hago lo de cookie de seguir conectado 
    if(isset(($_POST["stay-connected"]))){
      setcookie("stay-connected",$mail,time()+60*60,"/");
    }
    //voy a leiminar si existia ,ese $_SESSION["erro]
    unset($_SESSION["error"]);
    
    $_SESSION["email"] = $mail;
    $_SESSION["origin"] = "login";
    header("Location: index.php");
  }
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
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php" ?>
  <main>
    <?php 
    if(isset($_SESSION["error"])){
      $err = $_SESSION["error"];
      echo "<p class='error'> $err </p>";
    }
    ?>
    
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/login.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/app/models/User.php"?>

  </main>
  <!-- Incluir footer -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>