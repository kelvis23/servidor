<?php 
require_once $_SERVER["DOCUMENT_ROOT"] ."/app/models/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] ."/app/core/CoreDB.php ";

class UserDAO{

    /**
     * inserta en la bd un usuario. El metodo hashea la contraseña antes de meterla en la bd 
     * @param mixed $user usuario con la contraseña clara 
     * @return bool true si se ha insertado  bien, false si no se  ha insertadado(xej), ya 
     * existe un usari con es email )
     */
    public static function create($user):bool{
        $conn = CoreDB::getConnection();
        $sql = "INSERT into user ";
        $ps = $conn->prepare($sql);
        $email  = $user->getEmail();
        $name  = $user->getNamel();
        $pass = password_hash();
        $email  = $user->getEmail();
    return false;
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
}