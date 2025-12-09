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
        $sql = "INSERT INTO tree (price,height,material) 
        VALUE ($tree->price ,$tree->height, $tree->material)";
        //TODO : El juebe terminamos esto
    }
}
?>
   
