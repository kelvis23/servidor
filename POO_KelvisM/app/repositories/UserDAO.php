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
}
 