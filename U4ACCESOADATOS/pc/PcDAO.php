<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/CoreDB.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/Componet.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/Pc.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/pc/ComponetDAO.php";

class PcDAO
{
    /**
     * create /insert
     * Guarda en la bd un ordenador y tambien guarda todos sus componenetes 
     * @param Pc $pc
     * @return bool  true si lo ha insetado , false si no lo ha insertado
     * 
     */
    public static function create($pc): bool
    {
        //todo
        $conn = CoreDB::getConnection();
        $sql = "INSERT  into pcs (id,owner,brand,price) 
    values(?,?,?,?)";
        $ps = $conn->prepare($sql); /* prepared statement -sentencia preparada */
        /* operation de binding : asignar valores a cada ? (es de ir , asignar valores  donde faltantan ) */
        $id = $pc->getId();
        $owner = $pc->getOwner();
        $brand = $pc->getBrand();
        $price = $pc->getprice();

        $ps->bind_param("sssd", $id, $owner, $brand, $price);

        try {
            $ret = $ps->execute(); /* aqui se guarda enla bd el ordenador  */

            foreach ($pc->getComponents() as $component) {
                ComponetDAO::create($component, $id);
            }
        } catch (mysqli_sql_exception $e) { //altartiva catch(Exseption  $e
            return false;
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
    public static function read($id): ?PC
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * from pcs where id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $id);
        $ps->execute();
        $result = $ps->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pc = new Pc($id, $row["owner"], $row["brand"], $row["price"]);

            //Ahora tengo que leer los componentes donde su pc_id sea el de este pc:
            $pc->setComponents(ComponetDAO::readByPcId($id));
        } else {
            $pc = null;
        }
        $conn->close();
        return $pc;
    }
    public static function update($pc): bool
    {
        //todo
        return 0;
    }
    /**
     * elimina un pc  de la base datos <strong>junto con todos sus componenetes asociados </strong>
     * @param mixed $id id del pc que quiero elimminar
     * @return pc | null objeto pc eliminado o null 
     */
    public static function delete($id)
    {
        $pc = PcDAO::read($id);
        var_dump($pc);
        if ($pc == null) {
            return null;
        }
        $conn = CoreDB::getConnection();
        foreach ($pc->getComponents() as $c) {
            ComponetDAO::delete($c->getId());
        }
        $sql = "DELETE  from components where id = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $id);
        $ps->execute();
        $conn->close();
        return $pc;
    }

    public static function readAll()
    {
        //todo
    }

}