<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            include $_SERVER["DOCUMENT_ROOT"] . "/biblioteca/Biblioteca.php";
            include $_SERVER["DOCUMENT_ROOT"] . "/biblioteca/Libro.php";

            $miBiblioteca = new Biblioteca();

$miBiblioteca->agregarLibro(new Libro("Cien Años de Soledad", "Gabriel García Márquez", 1967));
$miBiblioteca->agregarLibro(new Libro("El amor en los tiempos del cólera", "Gabriel García Márquez", 1985));
$miBiblioteca->agregarLibro(new Libro("1984", "George Orwell", 1949));
$miBiblioteca->agregarLibro(new Libro("Rebelión en la granja", "George Orwell", 1945));
$miBiblioteca->agregarLibro(new Libro("Crimen y castigo", "Fiódor Dostoyevski", 1866));

// Listar todos los libros
$miBiblioteca->listarLibros();

// Buscar por autor
$autorBuscado = "George Orwell";
$resultados = $miBiblioteca->buscarPorAutor($autorBuscado);

echo "<h3>Resultados de búsqueda por $autorBuscado:</h3>";
foreach ($resultados as $libro) {
    echo "Título: " . $libro->getTitulo() . ", Año: " . $libro->getYear() . "<br>";
}
?>
</body>
</html>