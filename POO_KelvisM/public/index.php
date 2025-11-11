<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pelicula.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Series.php";
    include $_SERVER["DOCUMENT_ROOT"] . "/app/models/Documentales.php";

    $n2 = new Usuario("kelvis", "yo@gmail.com", 12345, ["peli1", "serie3"]);
    $n3 = new Usuario("ama", "ana@gmail.com", 12345, ["peli1", "serie3"]);

    //usuario
    $n2->favorito("documental5");
    //echo "<pre> esto para";
    echo "$n2";
    //echo "</pre>";
    echo "<br>";
    echo "<br>";
    $n2->mostrarFavoritos();
    echo "<br>";
    echo "<br>";
    $n3->eliminarFavorito("serie3");
    echo "$n3";

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
     echo"$s";

     echo "<br>";
     $s->agregarTemporada(23);

      echo "<br>";
     $s->finalizarSerie();

      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>";

     $d = new Documentales(    "naturalesa ",    "David Attenborough",  2006,   "Planeta Tierra",90 ,["Naturaleza","Documental"]);
     echo"$d";
     echo "<br>";

     $d->cambiarTema("Fauna");
     echo "<br>";

     $d->cambiarNarrador("Morgan Freeman");

    ?>
</body>

</html>