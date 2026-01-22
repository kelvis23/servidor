<?php

session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pelicula.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/FilmDAO.php";

?>

<?php if (isset($_SESSION["error"])): ?>
<script>
    //addslashes es una función de PHP que se usa para escapar ciertos caracteres dentro de una cadena de texto.
    alert("<?= addslashes($_SESSION['error']) ?>");
</script>
<?php
    unset($_SESSION["error"]);
endif;
?>
<?php


$mensaje = "";

// comprueba que  el usuario pueda quedarce en la pagina 
if (isset($_COOKIE["stay-connected"])) {

} else if ((isset($_SESSION["origin"]))) {
    
} else {
   
    $_SESSION["error"] = "te has intentado colar en el index";
    header("Location: form-login.php");
    exit();
}




// Siempre inicializamos la lista
$allFilms = FilmDAO::readAll() ?? [];

//  creación de película
// Verifica que se haya enviado desde post y que tenga el campo titulo
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["titulo"])) {
    $titulo = trim($_POST["titulo"]);
    $duracion = (int)$_POST["duracion"];
    $genero = $_POST["genero"] ?? [];
    $director = trim($_POST["director"]);
    $year = (int)$_POST["year"];
    $recaudacion = (int)$_POST["recaudacion"];

    $pelicula = new Pelicula(
        $titulo,
        $duracion,
        $genero,
        $director,
        $year,
        $recaudacion
    );

    //todo creo que no  sale los mensages
    if (FilmDAO::create($pelicula)) {
        $mensaje = "Película creada correctamente";
    } else {
        $mensaje = "Error al crear la película";
    }

    // Recargar lista tras crear
    $allFilms = FilmDAO::readAll() ?? [];
}

// Procesar eliminación
//todo creo que no salen los mensages 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_id"])) {
    $id = (int)$_POST["delete_id"];
    if (FilmDAO::delete($id)) {
        echo "<p style='color:green;'>Película eliminada correctamente</p>";
    } else {
        echo "<p style='color:red;'> Error al eliminar la película</p>";
    }

    // Recargar lista tras eliminar
    $allFilms = FilmDAO::readAll() ?? [];
}




?>


<!DOCTYPE html>
<html lang="en"></html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>original</title>

</head>

<body>
    <!-- Incluir cabecera -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/header.php" ?>
    <main>
        <?php
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Series.php";
        include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Documentales.php";

          if (isset($_SESSION["origin"]) && isset($_SESSION["email"])) {
            // Convierte caracteres especiales en HTML
    $userMail = htmlspecialchars($_SESSION["email"]);
    if ($_SESSION["origin"] === "signup") {
        echo "<p>¡Te damos la bienvenida, $userMail!</p>";
    } else {
        echo "<p>Bienvenido de nuevo, $userMail!</p>";
    }
}
        ?>
          <!--Formulario de creación de objetos-->
        <details>
            <summary>Crear Pelicula</summary>
            <?php if ($mensaje): ?>
            <p><?= $mensaje ?></p>
            <?php endif; ?>
            <form id="loginForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
                <!-- Título -->
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" required>
                </div>

                <!-- Duración -->
                <div class="form-group">
                    <label for="duracion">Duración (minutos)</label>
                    <input type="number" id="duracion" name="duracion" placeholder="Duración en minutos" min="1"
                        max="500" required>
                </div>

                <!-- Género -->
                <div class="form-group">
                    <label>Género</label>
                    <div class="dropdown-checkbox">
                        <label><input type="checkbox" name="genero[]" value="Acción"> Acción</label>
                        <label><input type="checkbox" name="genero[]" value="Comedia"> Comedia</label>
                        <label><input type="checkbox" name="genero[]" value="Drama"> Drama</label>
                        <label><input type="checkbox" name="genero[]" value="Fantasía"> Fantasía</label>
                        <label><input type="checkbox" name="genero[]" value="Terror"> Terror</label>
                        <label><input type="checkbox" name="genero[]" value="Ciencia Ficción">Ciencia Ficción </label>
                        <label><input type="checkbox" name="genero[]" value="Romance">Romance</label>
                    </div>

                    <!-- Director -->
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" id="director" name="director" placeholder="Nombre del director" required>
                    </div>

                    <!-- Año -->
                    <div class="form-group">
                        <label for="year">Año de estreno</label>
                        <input type="number" id="year" name="year" placeholder="Año de estreno" min="1888"
                            max="<?= date('Y') ?>" required>
                    </div>

                    <!-- Recaudación -->
                    <div class="form-group">
                        <label for="recaudacion">Recaudación </label>
                        <input type="number" id="recaudacion" name="recaudacion" placeholder="Recaudación en dólares"
                            required>
                    </div>


                </div>

                <button type="submit">Enviar</button>
            </form>
        </details>

               
        <h2>Lista de películas</h2>
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Director</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allFilms as $film): ?>
            <tr>
                <td><?= $film->getId() ?></td>
                <td><?= $film->getTitulo() ?></td>
                <td><?= $film->getDirector() ?></td>
                <td> <!--Formulario de eliminación de objetos-->
                    <form method="POST" style="display:inline-block;">
                        <input type="hidden" name="delete_id" value="<?= $film->getId() ?>">
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar esta película?');">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>