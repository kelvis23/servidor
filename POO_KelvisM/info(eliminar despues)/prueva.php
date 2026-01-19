<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/UserDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/repositories/FilmDAO.php";

// Creamos un usuario de prueba

$user = new Usuario("kelvis", "kelvis@gmail.com", "Sandia4you" );

// Insertamos el usuario en la base de datos
if(UserDAO::create($user)) {
    echo "Usuario insertado correctamente con ID: " . $user->getId() . "\n";
} else {
    echo "Error al insertar el usuario.\n";
}

// Leemos todos los usuarios
/*
$users = UserDAO::readAll();
foreach($users as $u) {
    echo "ID: " . $u->getId() . ", Nombre: " . $u->getNombre() . ", Email: " . $u->getEmail() . "\n";
}
*/

//pelicual de prueva 
$film = new Pelicula("peter", 10000, 2024, "el ultimo en pie", 60, ["acion", "drama"]);
// Insertamos la pelicula en la base de datos
echo "<br>";
if(FilmDAO::create($film)) {
    echo "pelicula insertado correctamente con ID: " . $film->getId() . "\n";
} else {
    echo "Error al insertar el pelicula.\n";
}

?>