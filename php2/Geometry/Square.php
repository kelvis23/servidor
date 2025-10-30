<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/php2/Geometry/Polygon.php";
class Square extends Polygon{

//atruibuto no estatico
    public int $noStaticArt =0;

    //atruibuto no estatico
public static  $staticArt =0;

    

    public function calcuteArea(){
        return $this ->getSide()**2;

        // return parent::getSide()**2;  es lo mimo 
    }
       public function dimeAlgo()
    {
        echo"cuadrado";
        parent::dimeAlgo();
    }

public function __tostring(){
    return "<p>Estatico</p>".Square::$staticArt.
    "-No estatico:".$this->noStaticArt."</p>";
}
}

?>