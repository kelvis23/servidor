<?php
abstract class Polygon{
    public function __construct(private float $side){}
    public abstract function calcuteArea();

    public function getSide()
    {
        return $this->side;
    }

     public function dimeAlgo()
    {
        echo"dime algo";
    }
}

?>