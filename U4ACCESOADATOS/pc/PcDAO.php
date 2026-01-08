<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/CoreDB.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/Componet.php";

class PcDAO{
/**
 * create /insert
 * Guarda en la bd un ordenador y tambien guarda todos sus componenetes 
 * @param Pc $pc
 * @return bool  true si lo ha insetado , false si no lo ha insertado
 * 
 */
private static function create($pc):bool {
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

   // Guardamos 
   foreach($pc->getComponents)
    return false;
}
    /**
     * read /select
     * lee un pc de la bd o null si no existe el id 
    * @param mixed $sid
     * @return void
     */
    private static function read($id):?PC{
        //todo
    return null;
    }
    private static function update  ($pc):bool{
        //todo
    return 0;
    }
      private static function delete  ($id):bool{
        //todo
        return null;
    }

         private static function readAll  (){
        //todo
    }

}