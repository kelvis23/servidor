<?php
session_start();
$mail = $pass = $type = "";
$mailError = $passError = $typeError = "";

$errors = false;

// no funciona  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include $_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php";
  $mail = secure($_POST["email"]);
  $pass = secure($_POST["password"]);

  if (!isset($_POST["password"])) {
    $errors = true;
    $typeError = "tienes que selecionar un metodo";
  } else {
    $type = secure($_POST["login-type"]);
  }

  if (empty($email)) {
    $errors = true;
    $emailError = "Este campo es obligatorio";
  }
  if (empty($pass)) {
    $errors = true;
    $passError = "Rellena las contraseñas no coinsiden ";
  }

  
  if (!$errors) {
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
  <title>login</title>
  <!-- Incluir css -->
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <!-- Incluir cabecera -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php" ?>
  <main>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/login.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/app/models/Usuario.php" ?>

  </main>
  <!-- Incluir footer -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>