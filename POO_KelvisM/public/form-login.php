<?php
session_start();


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
    <?php include $_SERVER['DOCUMENT_ROOT']."/app/models/Usuario.php"?>

  </main>
  <!-- Incluir footer -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>