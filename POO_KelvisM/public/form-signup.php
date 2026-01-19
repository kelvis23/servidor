<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
 require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/UserDAO.php";


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

    
    // Validaciones
    if (empty($name)) {
        $errors = true;
        $nameError = "Este campo es obligatorio";
    }

    if (empty($email)) {
        $errors = true;
        $emailError = "Este campo es obligatorio";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors = true;
        $emailError = "Email no válido";
    }

       // Verificar si el email ya existe
    if (!$errors) {
        $allUsers = UserDAO::readAll();
        foreach ($allUsers as $u) {
            if ($u->getEmail() === $email) {
                $errors = true;
                $emailError = "Este email ya está registrado";
                break;
            }
        }
    }

    if (empty($pass)) {
        $errors = true;
        $passError = "La contraseña es obligatoria";
    } elseif ($pass !== $pass2) {
        $errors = true;
        $passError = "Las contraseñas no coinciden";
    }

   
    if (!$errors) {
            $usuario = new Usuario( $name, $email, $pass ); // ID null, se genera al crear
        $created = UserDAO::create($usuario);
        if($created){
        $_SESSION["fullname"] = $name;
        $_SESSION["signup-email"] = $email;
        $_SESSION["origin"] = "signup";
        header("Location: index.php");
        }else{
                 $errors = true;
            $passError = "Error al registrar el usuario, intenta de nuevo";
        }
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