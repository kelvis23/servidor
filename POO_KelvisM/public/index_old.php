<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">

    <title>Document</title>
</head>

<body>
    <?php
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pelicula.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Series.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Documentales.php";

    $n2 = new Usuario("kelvis", "yo@gmail.com", 12345, ["peli1", "serie3",]);
    $n3 = new Usuario("pablo", "yo@gmail.com", 12345, ["peli1", "serie3",]);
    $n5 = new Usuario("ana", "yo@gmail.com", 12345, ["peli1", "serie3",]);
    $pelicula1 = new Pelicula("Spielberg", 500, 1993, "Jurassic Park", 127, ["Aventura", "Ciencia Ficción"]);
    $pelicula2 = new Pelicula("Nolan", 300, 2010, "Inception", 148, ["Acción", "Ciencia Ficción"]);

    $peliculas = [$pelicula1, $pelicula2];

    $serie1 = new Series(3, 24, false, "Stranger Things", 50, ["Suspense", "Ciencia Ficción"]);
    $serie2 = new Series(5, 120, true, "Breaking Bad", 47, ["Drama", "Crimen"]);

    $series = [$serie1, $serie2];

    $documental1 = new Documentales("Naturaleza", "David Attenborough", 2019, "Planet Earth II", 60, ["Naturaleza", "Documental"]);
    $documental2 = new Documentales("Historia", "Morgan Freeman", 2021, "The Story of God", 50, ["Religión", "Historia"]);

    $documentales = [$documental1, $documental2];
    //Solo puedes añadir un nuevo favorito a la vez; este reemplaza al anterior que el usuario haya creado durante la ejecución actual.
    // Si eliminas un favorito que estaba hardcodeado, al volver a añadir uno nuevo, ese favorito hardcodeado se regenerará automáticamente 
    // porque el objeto se vuelve a inicializar.
    
    //favoritos
    if (!empty($_POST['nuevoFavorito'])) {
        $n2->favorito($_POST['nuevoFavorito']);
    }

    if (!empty($_POST['eliminarFavorito'])) {
        $n2->eliminarFavorito($_POST['eliminarFavorito']);
    }

    // crear  genero o eliminación de géneros
    if (!empty($_POST['nuevoGenero']) && isset($_POST['peliculaIndex'])) {
        $peliculas[$_POST['peliculaIndex']]->genero($_POST['nuevoGenero']);
    }

    if (!empty($_POST['eliminarGenero']) && isset($_POST['peliculaIndex'])) {
        $peliculas[$_POST['peliculaIndex']]->eliminarGenero($_POST['eliminarGenero']);
    }
    /*posible error  es que cuando se actualisa mustra el mensaje arriba de del todo  */
    if (!empty($_POST['nuevaRecaudacion']) && isset($_POST['peliculaIndex'])) {
        $peliculas[$_POST['peliculaIndex']]->actualizarRecaudacion((int) $_POST['nuevaRecaudacion']);
    }
    //serie
    if (!empty($_POST['nuevoGenero']) && isset($_POST['serieIndex'])) {
        $series[$_POST['serieIndex']]->genero($_POST['nuevoGenero']);
    }

    if (!empty($_POST['eliminarGenero']) && isset($_POST['serieIndex'])) {
        $series[$_POST['serieIndex']]->eliminarGenero($_POST['eliminarGenero']);
    }

    if (!empty($_POST['nuevosCapitulos']) && isset($_POST['serieIndex'])) {
        $series[$_POST['serieIndex']]->agregarTemporada((int) $_POST['nuevosCapitulos']);
    }

    if (!empty($_POST['finalizarSerie']) && isset($_POST['serieIndex'])) {
        $series[$_POST['serieIndex']]->finalizarSerie();
    }

    //documento 
    // /*posible error  es que cuando se actualisa mustra el mensaje arriba de del todo  */ 
    if (!empty($_POST['nuevoTema']) && isset($_POST['documentalIndex'])) {
        $documentales[$_POST['documentalIndex']]->cambiarTema($_POST['nuevoTema']);
    }

    //  /*posible error  es que cuando se actualisa mustra el mensaje arriba de del todo  */ 
    if (!empty($_POST['nuevoNarrador']) && isset($_POST['documentalIndex'])) {
        $documentales[$_POST['documentalIndex']]->cambiarNarrador($_POST['nuevoNarrador']);
    }
    // el error es que esos metodos tiene mensajes 
    ?>




    <?php
    //usuario
    echo "<header class='welcome'>";
    echo "<h1>Bienvenido, " . $n2->getNombre() . "</h1>";
    echo "<p>Disfruta explorando tus películas, series y documentales favoritos.</p>";
    echo "</header><hr>";

    //<details> es un elemento  que permite crear un bloque desplegable
    echo "<details>";
    //<summary> es lo que siempre se ve y al hacer clic despliega el contenido dentro
    echo "<summary>Ver información del usuario</summary>";
    echo "<div style='padding:10px;'>";
    echo $n2; // Esto llama automáticamente a $n2->__toString()
    echo "</div>";
    echo "</details>";

    // Formulario para añadir favorito
    echo "<form method='post' class='form-favorito'>";
    echo "<label for='nuevoFavorito'>Añadir favorito:</label>";
    echo "<input type='text' id='nuevoFavorito' name='nuevoFavorito' placeholder='Nombre del favorito' required>";
    echo "<button type='submit'>Añadir</button>";
    echo "</form>";

    // Formulario para eliminar favorito
    echo "<form method='post' class='form-favorito'>";
    echo "<label for='eliminarFavorito'>Eliminar favorito:</label>";
    echo "<input type='text' id='eliminarFavorito' name='eliminarFavorito' placeholder='Nombre del favorito' required>";
    echo "<button type='submit'>Eliminar</button>";
    echo "</form>";

    // Mostrar lista actualizada después de eliminar
    echo "<div class='favoritos-actuales'>";
    echo "<strong>Favoritos actuales:</strong><br>";
    $n2->mostrarFavoritos();
    echo "</div>";
    ?>

    <h2>Películas disponibles</h2>

    <?php
    echo "<div class='peliculas-azul'>";
    foreach ($peliculas as $index => $pelicula) {
        echo "<details>";
        echo "<summary>" . $pelicula->getTitulo() . " (" . $pelicula->getYear() . ")</summary>";
        echo "<div>";
        echo $pelicula; // usa __toString() para mostrar información básica
    
        // Formulario para añadir un nuevo género
        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='nuevoGenero{$index}'>Añadir género:</label>";
        echo "<input type='text' id='nuevoGenero{$index}' name='nuevoGenero' placeholder='Nombre del género'>";
        echo "<input type='hidden' name='peliculaIndex' value='$index'>";
        echo "<button type='submit'>Añadir</button>";
        echo "</form>";

        // Formulario para eliminar un género existente
        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='eliminarGenero{$index}'>Eliminar género:</label>";
        echo "<input type='text' id='eliminarGenero{$index}' name='eliminarGenero' placeholder='Nombre del género'>";
        echo "<input type='hidden' name='peliculaIndex' value='$index'>";
        echo "<button type='submit'>Eliminar</button>";
        echo "</form>";
        echo "</div>";
        echo "</details>";

        // Formulario para actualizar recaudación
        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='nuevaRecaudacion{$index}'>Actualizar recaudación (millones):</label>";
        echo "<input type='number' id='nuevaRecaudacion{$index}' name='nuevaRecaudacion' placeholder='Cantidad'>";
        echo "<input type='hidden' name='peliculaIndex' value='$index'>";
        echo "<button type='submit'>Actualizar</button>";
        echo "</form>";
    }
    echo "</div>";
    ?>

    <h2>Series</h2>
    <?php
    echo " <div class=series-container>";
    foreach ($series as $index => $serie) {
        echo "<details>";
        echo "<summary>" . $serie->getTitulo() . "</summary>";
        echo "<div>";
        echo $serie;

        // Formulario para añadir género
        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='nuevoGeneroS{$index}'>Añadir género:</label>";
        echo "<input type='text' id='nuevoGeneroS{$index}' name='nuevoGenero' placeholder='Nombre del género'>";
        echo "<input type='hidden' name='serieIndex' value='$index'>";
        echo "<button type='submit'>Añadir</button>";
        echo "</form>";

        // Formulario para eliminar género
        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='eliminarGeneroS{$index}'>Eliminar género:</label>";
        echo "<input type='text' id='eliminarGeneroS{$index}' name='eliminarGenero' placeholder='Nombre del género'>";
        echo "<input type='hidden' name='serieIndex' value='$index'>";
        echo "<button type='submit'>Eliminar</button>";
        echo "</form>";

        // Formulario para agregar temporada
        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='nuevosCapitulos{$index}'>Agregar temporada (capítulos):</label>";
        echo "<input type='number' id='nuevosCapitulos{$index}' name='nuevosCapitulos' placeholder='Cantidad'>";
        echo "<input type='hidden' name='serieIndex' value='$index'>";
        echo "<button type='submit'>Agregar</button>";
        echo "</form>";

        // Formulario para finalizar serie
        if (!$serie->getFinalizado()) {
            echo "<form method='post' style='margin-top:10px;'>";
            echo "<input type='hidden' name='serieIndex' value='$index'>";
            echo "<input type='hidden' name='finalizarSerie' value='1'>";
            echo "<button type='submit'>Marcar como finalizada</button>";
            echo "</form>";
        }

        echo "</div>";
        echo "</details>";
    }
    echo "</div>";
    ?>

    <h2>Documentales</h2>

    <?php
    echo "<div class=documentales-container>";
    foreach ($documentales as $index => $documental) {
        echo "<details>";
        echo "<summary>" . $documental->getTitulo() . " (" . $documental->getAños() . ")</summary>";
        echo "<div>";
        echo $documental; // usa __toString()
    
        // Formularios para cambiar tema o narrador
        echo "<form method='post'>";
        echo "<label for='nuevoTema{$index}'>Cambiar tema:</label>";
        echo "<input type='text' id='nuevoTema{$index}' name='nuevoTema' placeholder='Nuevo tema'>";
        echo "<input type='hidden' name='documentalIndex' value='$index'>";
        echo "<button type='submit'>Actualizar tema</button>";
        echo "</form>";

        echo "<form method='post' style='margin-top:10px;'>";
        echo "<label for='nuevoNarrador{$index}'>Cambiar narrador:</label>";
        echo "<input type='text' id='nuevoNarrador{$index}' name='nuevoNarrador' placeholder='Nuevo narrador'>";
        echo "<input type='hidden' name='documentalIndex' value='$index'>";
        echo "<button type='submit'>Actualizar narrador</button>";
        echo "</form>";

        echo "</div>";
        echo "</details>";
    }
    echo "</div>"
        ?>

<?php
   //footer
echo"<hr>";
echo "<footer style='background-color:black; color:white; border-top:1px solid white; padding:10px; text-align:center;'>";
echo "Usuarios que han ingresado: " . Usuario::getContadorUsuarios();
echo "</footer>";

   
?>

</body>

</html>