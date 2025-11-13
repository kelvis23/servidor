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