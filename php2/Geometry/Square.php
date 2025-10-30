<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/php2/Geometry/Polygon.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/php2/Geometry/Paint.php";

class Square extends Polygon implements Paint{

//atruibuto no estatico
    public int $noStaticArt =0;

    //atruibuto no estatico
public static  $staticArt =0;

    

    public function calcuteArea(){
        return $this ->getSide()**2;

        // return parent::getSide()**2;  es lo mimo 
    }

    //crea una funcion que calcule el area de cualquier cuadrado
public static function  calculateAreaSide($side){
    return $side**2;
}
       public function dimeAlgo()
    {
        echo"cuadrado";
        parent::dimeAlgo();
    }

public function __tostring(){
    return "<p>Estatico ".Square::$staticArt.
    " - No estatico: ".$this->noStaticArt."</p>";
}

//tengo que implementar  sus metos abstractos
public function draw(){
    return"dibujo de un cuadrdo";
}


}

?>