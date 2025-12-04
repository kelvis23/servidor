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

// if(!(isset($_COOKIE["stay-connected"]) or isset($_SESSION["origin"]))){
//    $_SESSION["error"] = "te has intentadocolar en el index";
//     header("Location: form-login.php");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php" ?>
    <main>


        <?php
        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "book") {
            require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Book.php";
            $b = new Book(
                $_SESSION["isbn"],
                $_SESSION["title"],
                $_SESSION["author"],
                $_SESSION["pages"],
                $_SESSION["type"]

            );
            echo "<p>$b</p>";
        }

        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "signup") {
            //creo un objeto User
            require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/User.php";
            //require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Region.php";
            /*$region = "madrid";
            $u = new User("nombre", "a@a.com", "asdf", constant("Region::$region"));*/
            $region = $_SESSION["region"];
            $u = new User(
                $_SESSION["fullname"],
                $_SESSION["signup-email"],
                "",
                constant("Region::$region")
            );

            //lo imprimo
            echo "<p>$u</p>";
        }

        if (isset($_SESSION["origin"]) and $_SESSION["origin"] == "login") {
            echo "<p>Te damos la bienvenida, {$_SESSION['email']}</p>";
        }
        // Ver si tiene cookies de permanecer registrado. Coger su nombre
        // Si no tiene cookie pero tiene sesión, recuperar su nombre
        // Si no, a signup.
        
        ?>

    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>