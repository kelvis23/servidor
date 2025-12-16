<?php
session_start();
$name = $mail = $pass = "";
$mailError = $passError = "";
$errors = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include $_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php";
    $name = secure(($_POST["fullname"]));
    $email = secure(($_POST["signup-email"]));
    $pass = secure(($_POST["signup-password"]));
    $pass2 = secure(($_POST["confirm-password"]));


    if (empty($name)) {
        $errors = true;
        $nameError = "Este campo es obligatorio";
    }
    if (empty($email)) {
        $errors = true;
        $emailError = "Este campo es obligatorio";
    }
    if (empty($pass) or $pass != $pass2) {
        $errors = true;
        $passError = "Rellena las contraseñas no coinsiden ";
    }
    if (!$errors) {
        $_SESSION["fullname"] = $name;
        $_SESSION["signup-email"] = $email;
        $_SESSION["origin"] = "signup";
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
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php" ?>

    <main>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/components/signup.php" ?>
    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>

</body>

</html>