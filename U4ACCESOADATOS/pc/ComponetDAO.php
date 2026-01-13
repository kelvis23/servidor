<?php

use LDAP\Result;
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/CoreDB.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/Componet.php";
class ComponetDAO
{
    // atrivutos y esas cosas
    public static function create(Componet $c , $pc_id): int
    {
        $conn = CoreDB::getConnection();
     /*
     $sql = "INSERT into components(name , brand,model)values(
        \"{$c->getName()}\",
        \"{$c->getBrand()}\",
        \"{$c->getModel()}\",)";

        $conn->query($sql);
        $id = $conn->insert_id;
        $c->setId($id);
        $conn->close();
        return $id;
*/
        $sql = "INSERT into components (name , brand,model,pc_id) value(?,?,?,?)";
        $ps = $conn->prepare($sql);
        $name = $c->getName();
        $brand = $c->getBrand();
        $model = $c->getModel();
        $ps->bind_param("ssss",$name,$brand,$model,$pc_id);
        
        $ps->execute();

        $id = $ps->insert_id;
        $c->setId($id);

        $conn->close();

        return $id;
    }


    /**
     * leo (select ) de la bd por id 
     * @param int $id
     * @return Componet el componenete leido de la b o null si no existe ppor ese id 
     */
    public static function read(int $id): ?Componet
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * from components where id = $id";
       //$id = "0; delete * from componentes where or 1=1" ;
       //select * from components where id =0 ; delete * from componentes where 
       //
        $result = $conn->query($sql);
        $conn->close();
        if (($row = $result->fetch_assoc()) != null) {
            return new Componet(
                $row["name"],
                $row["brand"],
                $row["model"],
                $row["id"]
            );

        }
        return null;

    }

    /**
     *Actualiza el componente que le pazo como paramatros (todos los atributos meneos el id )
     * @param Componet $c
     * @return bool
     */
    public static function update(Componet $c): bool
    {
        $conn = CoreDB::getConnection();
        $sql = "UPDATE components SET 
        name = \"{$c->getName()}\",
        brand = \"{$c->getBrand()}\",
        model = \"{$c->getModel()}\",
        WHERE = id = {$c->getId()}
        ";
        //echo "$sql"
        $conn->query($sql);
        $num = $conn->affected_rows;
        $conn->close();
        //si ha actualisado alguna (el numero de de filas  afectadas es >0) es
        /*if($num>0){
            return true;
        }
        return false ;*/
        return ($num > 0);

    }


    /**
     * Devuelve el componet eliminado , o null si no estia un componenete co este id 
     */
    public static function delete(int $id): Componet
    {
        
        $c = ComponetDAO::read($id);
        $conn = CoreDB::getConnection();
        $sql = "DELETE FROM components where id = $id";
        $conn->query($sql);
        $conn->close();

        return $c;
    }

    public static function readAll(): array
    {
        $arr = [];
        $conn = CoreDB::getConnection();
        $sql = "SELECT * from components";
        $result = $conn->query($sql);
        while (($row = $result->fetch_all()))


        $conn->close();
        return $arr;
    }
    public static function readByPCid($pc_id){
     $componensts =array();    
     $conn = CoreDB::getConnection();
        $sql ="SELECT*from components where pc_id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s",$id);
        $ps->execute();
        $result=$ps->get_result();
        while(($row=$result->fetch_assoc()) !=null){
            $componensts[] = new Componet($row["name"],$row["brand"],$row["model"],$row["id"]);
        }   
          $conn->close();
        return $componensts;
    }
    
}
