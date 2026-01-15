<?php 
require_once $_SERVER["DOCUMENT_ROOT"] ."/app/models/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/core/CoreDB.php";

class UserDAO{

    /**
     * inserta en la bd un usuario. El metodo hashea la contraseña antes de meterla en la bd 
     * @param mixed $user usuario con la contraseña clara 
     * @return bool true si se ha insertado  bien, false si no se  ha insertadado(xej), ya 
     * existe un usari con es email )
     */
    public static function create($user):bool{
     $conn = CoreDB::getConnection();
        //todo el jueves la región
        $sql = "INSERT into users (email, name, pass, region) values (?, ?, ?, ?);";
        $ps = $conn->prepare($sql);
        $email = $user->getEmail();
        $name = $user->getName();
        $pass = password_hash($user->getPass(), PASSWORD_DEFAULT);
        $region = $user->getRegionAsString();
        $ps->bind_param("ssss", $email, $name, $pass, $region);

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
    

    /**
     *Dado un email y una contraseña comprueba que corresondan de la bd
     * @param mixed $email
     * @param mixed $pass
     * @return int 1 si coinsiden -1 si el email esta pero la contraseña 
     */
    public static  function checkPassword($email,$pass):int {
        return 0;
    }

    public static function read($id):?USer{
        //todo
        return null;
    }
}