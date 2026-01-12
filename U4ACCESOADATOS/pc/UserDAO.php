<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/CoreDB.php";

class UserDAO{
    public static function create($user){
        $conn = CoreDB::getConnection();

        $sql="INSERT into users (name , password)values(?,?)";
        $ps =$conn->prepare($sql);
        $name=$user->getName();
        $pass=$user->getPass();
        $passHash= password_hash($pass,PASSWORD_DEFAULT);
        $ps->bind_param("ss",$name,$passHash);

        $ps->execute();

        $id=$ps->insert_id;
        $user->setId($id);

        $conn->close();

        return $id;
    }
      public static function verifyPassword($name ,$pass):int{
       $ret =0;
      $conn = CoreDB::getConnection();
      $sql="SELECT * from users where name = ?";
      $ps =$conn->prepare($sql);
      $ps->bind_param("s",$name);
      $ps->execute();
      $reseult= $ps->get_result();
      $row =$reseult->fetch_assoc();
      if($row!=null){
        $passDB =$row["password"];
        if(password_verify($pass,$passDB)){
            $ret= 1;
        }else{
            $ret = -2;
        }
      }else{
        $ret =-1;
      }
      $conn->close();
      return $ret;



        
    }
}