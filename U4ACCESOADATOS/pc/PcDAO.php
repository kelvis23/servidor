<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/CoreDB.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/Componet.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/Pc.php";

class PcDAO{
/**
 * create /insert
 * Guarda en la bd un ordenador y tambien guarda todos sus componenetes 
 * @param Pc $pc
 * @return bool  true si lo ha insetado , false si no lo ha insertado
 * 
 */
public static function create($pc):bool {
    //todo
     $conn = CoreDB::getConnection();
    $sql = "INSERT  into pcs (id,owner,brand,price) 
    values(?,?,?,?)";
    $ps = $conn->prepare($sql); /* prepared statement -sentencia preparada */
    /* operation de binding : asignar valores a cada ? (es de ir , asignar valores  donde faltantan ) */
    $id =$pc->getId();
    $owner = $pc->getOwner();
    $brand =$pc->getBrand();
    $price =$pc->getprice();
    
    $ps->bind_param("sssd",$id,$owner,$brand,$price);
   
     $ret = $ps-> execute(); /* aqui se guarda enla bd el ordenador  */

     foreach($pc->getComponents()as $component){
        ComponetDAO::create($component,$id);
     }
   // Guardamos
   $conn->close();
    return $ret;
}
    /**
     * read /select
     * lee un pc de la bd o null si no existe el id 
    * @param mixed $sid
     * @return void
     */
    public static function read($id):?PC{
        //todo
             $conn = CoreDB::getConnection();
             $sql = "SELECT * from pcs where id = ?";
             $ps = $conn->prepare($sql);
             $ps -> $conn->bind_param("s",$sql);
             $ps -> execute();
             $result= $ps->get_result();
             
             $conn->close();
             if($result->num_rows>0) {
                $row = $result->fetch_assoc();
                
                $pc = new Pc($id,$row["owner"],$row["brand"],$row["price"]);
             }else{
                $pc = null;
             }
    return $pc;
    }
    public static function update  ($pc):bool{
        //todo
    return 0;
    }
      public static function delete  ($id):bool{
        //todo
       return false;
    }

         public static function readAll  (){
        //todo
    }

}