<?php
session_start();
$mail = $pass = "";
$mailError = $passError =  "";

$errors = false;

// no funciona  
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include $_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php";
  $mail = secure($_POST["email"]);
  $pass = secure($_POST["password"]);

  if (empty($mail)) {
    $errors = true;
    $mailError = "Este campo es obligatorio";
  }
  if (empty($pass)) {
    $errors = true;
    $passError = "Este campo es obligatorio";

  }

  if (!$errors) {
    require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/UserDAO.php";
    require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";
  $usuario = UserDAO::login($mail, $pass);
  if ($usuario === null) {
        $passError = "Email o contraseña incorrectos";
    } else {
       $_SESSION["email"] = "$mail";
     $_SESSION["origin"] = "login";
    header("Location: index.php");
    exit();
  }
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
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Usuario.php" ?>

  </main>
  <!-- Incluir footer -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>