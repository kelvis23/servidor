<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Info.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Pelicula.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

class FilmDAO
{
    public static function create($film): bool
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT into films (title,duration, gender,director,year,collection ) values (?, ?, ?,?,?,?);";
        $ps = $conn->prepare($sql);
        $title = $film->getTitulo();
        $duration = $film->getDuracion();
        $gender = implode(',', $film->getGenero());    // <-- array a string separado por comas 
        $director = $film->getDirector();
        $year = $film->getYear();
        $collection = $film->getRecaudacion();

        $ps->bind_param("sissii", $title, $duration, $gender, $director, $year, $collection);

        try {
            $ps->execute();
            //Tengo que recuperar el id con el que se ha insertado
            $film->setId($ps->insert_id);
        } catch (Exception $e) {
            $conn->close();
            return false;
        }

        $conn->close();
        return true;
    }


    //devuelve todas las películas de la base de datos como objetos

    public static function readAll()
    {
        $conn = CoreDB::getConnection();
        $films = [];
        $res = $conn->query("select * from films");
        while (($f = $res->fetch_assoc()) != null) {
            $films[] = new Pelicula(
                $f["title"],
                (int) $f["duration"],       
                explode(',', $f["gender"]),
                $f["director"],
                (int) $f["year"],
                (int) $f["collection"],
                (int) $f["id"]
            );
        }
        $conn->close();
        return $films;
    }

    //elimina una película de la base de datos
    public static function delete(int $id): bool
    {
        $conn = CoreDB::getConnection();

        $sql = "DELETE FROM films WHERE id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("i", $id);

        $success = $ps->execute();
        $conn->close();

        return $success;
    }
}
