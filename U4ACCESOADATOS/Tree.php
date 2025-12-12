<?php
class Tree{
    function __construct(
        
        private float $price,
        private float $height,
        private string $material,
        private int $id = -1
    ){}
    public function __tostring(){
        return "$this->id:
        $this->price-
        $this->height -
        $this->material";
    }
    



    /**
     *Insertar en la base de datos el arbol
     * @param Tree $tree arbil a insertar en la bd
     * @param mysqli $conn conexion con la bd 
     * @return void id con el que se ha insertado en la BD
     */
    static function insert(Tree $tree , mysqli $conn):int{
        $sql = "INSERT INTO trees (price,height,material) 
        VALUE (\"$tree->price\" ,\"$tree->height\", \"$tree->material\")";
        $conn->query($sql);
        $id = $conn->insert_id;
        //$filas = $conn->affected_rows;

        return $id;
    }

    /**
     * busca por id un arbol en la db
     * @param mixed $id id a buscar en la db
     * @param mixed $conn conexion con la db
     * @return void el arbol de la db o null si no esiste el is
     */
    
      static function select($id, $conn): ?Tree
    {
        $sql = "SELECT * from trees where id = $id";
        $row = $conn->query($sql); //devuelve un mysqli_result
        if ($row->num_rows > 0) {
            $arr = $row->fetch_assoc();
            $t = new Tree(
                $arr["price"],
                $arr["height"],
                $arr["material"],
                $arr["id"]
            );
            return $t;
        } else {
            return null;
        }
    }
    static function selectAll($conn): array {
        $trees = array();
        $sql = "SELECT * from trees";
        $rows = $conn->query($sql);
        while (($row = $rows->fetch_assoc()) != null){
            $trees[] = new Tree(
                $row["price"],
                $row["height"],
                $row["material"],
                $row["id"]
            );
        }
        return $trees;
    }

    static function delete($id, $conn): bool
    {
        $sql = "DELETE FROM trees WHERE id = $id";
        $conn->query($sql); //aquí se lanza la consulta
        $rows = $conn->affected_rows;   //filas afectadas por la consulta
        if ($rows > 0) {
            return true;
        }
        return false;
    }

    
}
  
?>
   
