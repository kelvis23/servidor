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
        ?>

        <!--Formulario de creación de objetos-->
        <details>
            <summary>Crear Pelicula</summary>
            <form id="loginForm" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
                <!-- Título -->
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="titulo" id="titulo" name="titulo" placeholder="titulo de la pelicula">
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
                        <label for="recaudacion">Recaudación (USD)</label>
                        <input type="number" id="recaudacion" name="recaudacion" placeholder="Recaudación en dólares"
                            min="0" step="1000" required>
                    </div>


                </div>

                <button type="submit">Enviar</button>
            </form>
        </details>



        <!--Formulario de eliminación de objetos-->
        <details>
             <!-- para hacer esto  es mejor con selec y option que  vaunto  generando  la id con la base de db se recomienda des pues -->
            <summary>Eliminar pelicula</summary>
        <?php
            require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/FilmDAO.php";
            $allFilm = FilmDAO::readAll();
        ?>
        <h3>Esto igual sirve para la parte de eliminar:</h3>
        <form>
            <select>
                <?php foreach ($Film as $film) : ?>
                    <option id="<?= $film->getId() ?>"><?= $film->getName() ?> de <?= $user->getRegionAsString() ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit">

        </details>
        
        
        <?php

        $n2 = new Usuario("kelvis", "yo@gmail.com", 12345, ["peli1", "serie3"]);
        $n3 = new Usuario("ama", "ana@gmail.com", 12345, ["peli1", "serie3"]);
        echo "<br>";
        echo "<br>";
        //usuario
        $n2->favorito("documental5");
        //echo "<pre> esto para utilisar /n";
        echo "$n2";
        //echo "</pre>";
        echo "<br>";
        echo "<br>";
        $n2->mostrarFavoritos();
        echo "<br>";
        echo "<br>";
        $n3->eliminarFavorito("serie3");
        echo "$n3";
        //metodo  estatico
        

        //pelicula
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $p = new Pelicula("peter", 10000, 2024, "el ultimo en pie", 60, ["acion", "drama"]);
        $p2 = new Pelicula("Spielberg", 500, 1993, "Jurassic Park", 127, ["Aventura", "Ciencia Ficción"]);


        $p->genero("supense");
        echo "$p";
        echo "<br>";
        echo "<br>";
        $p2->eliminarGenero('Aventura');
        echo "$p2";
        echo "<br>";
        echo "<br>";
        $p2->actualizarRecaudacion(10000);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        //Serie
        $s = new Series(5, 62, false, "Breaking Bad", 49, ["Drama", "Crimen"]);
        echo "$s";

        echo "<br>";
        $s->agregarTemporada(23);

        echo "<br>";
        $s->finalizarSerie();

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $d = new Documentales("naturalesa ", "David Attenborough", 2006, "Planeta Tierra", 90, ["Naturaleza", "Documental"]);
        echo "$d";
        echo "<br>";

        $d->cambiarTema("Fauna");
        echo "<br>";

        $d->cambiarNarrador("Morgan Freeman");

        ?>
    </main>
    <!-- Incluir footer -->
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/resources/views/layouts/footer.php" ?>
</body>

</html>