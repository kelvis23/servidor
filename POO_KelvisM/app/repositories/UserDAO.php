<?php 
require_once $_SERVER["DOCUMENT_ROOT"] ."/app/models/Usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

 class UserDAO{
       public static function create($user):bool{
     $conn = CoreDB::getConnection();
        $sql = "INSERT into users (name,email, pass ) values (?, ?, ?);";
        $ps = $conn->prepare($sql);
        $name = $user->getNombre();    
        $email = $user->getEmail();
        $pass = password_hash($user->getPassword(), PASSWORD_DEFAULT);
        $ps->bind_param("sss",  $name,$email, $pass);

        try {
            $ps->execute();
            //Tengo que recuperar el id con el que se ha insertado
            $user->setId($ps->insert_id);
        } catch (Exception $e) {
            $conn->close();
            return false;
        }

        $conn->close();
        return true;
    }


    public static function readAll()
    {
        $conn = CoreDB::getConnection();
        $users = [];
        $res = $conn->query("select * from users");
        while (($f = $res->fetch_assoc()) != null) {
                $users[] = new Usuario(
                $f["id"],    
                $f["name"],
                $f["email"],
                  //favoritos
                );
        }
        $conn->close();
        return $users;
    }

    // 
    /**
     * para provar que el usuario existe en la db Summary of login
     * @param string $email
     * @param string $password
     * @return Usuario|null
     */
    public static function login(string $email, string $password): ?Usuario
{
    $conn = CoreDB::getConnection();

    $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $ps = $conn->prepare($sql);
    $ps->bind_param("s", $email);
    $ps->execute();

    //obtener el resultado de la consulta 
    $res = $ps->get_result();

    // email no existe
    if ($res->num_rows === 0) {
        $conn->close();
        return null; 
    }

    //fetch_assoc() convierte la fila en un array asociativo:
    $row = $res->fetch_assoc();

    // comprobar contraseña
    if (!password_verify($password, $row["pass"])) {
        $conn->close();
        return null; // contraseña incorrecta
    }

    $usuario = new Usuario(
        $row["id"],
        $row["name"],
        $row["email"]
    );

    $conn->close();
    return $usuario;
}

}
 