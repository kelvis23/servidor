<?php
session_start();

//voy a verifica que ha llegado
//1.tiene cookie
//2.form-login
//3.form-signup
if (isset($_COOKIE["stay-connected"])) {

} else if ((isset($_SESSION["origin"]))) {
    //mequedo
} else {
    $_SESSION["error"] = "te has intentadocolar en el index";
    header("Location: form-login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueva</title>

</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php" ?>
    <main>
        <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pelicula.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Series.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Documentales.php";

        // entrar desde login 
        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "login") {

            $a = new Usuario(
                0, //id
                "", //nombre
                $_SESSION["email"], // email
                "",                // pass
                [],                // favoritos
        
            );
              echo "<p>$a</p>";

        }

        //entrar desde sigup
        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "signup") {


            $u = new Usuario(
                 0, //id
                $_SESSION["fullname"],
                $_SESSION["signup-email"],
                "",
                [],

            );
            echo"<p>$u</p>";

            //lo imprimo
          
        }


        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "login") {
            echo "<p>Te damos la bienvenida, {$_SESSION['email']}</p>";
        }

        ?>
    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>