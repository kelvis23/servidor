<?php
class Flores extends Planta {
    private string $florasion;

    public function __construct(string $florasion, $especie, $altura){
        $this->florasion = $florasion;
             parent::__construct($especie, $altura);
    }
    public function getFlorasion(): string
    {
        return $this->florasion;
    }

    public function setFlorasion(string $florasion): void
    {
        $this->florasion = $florasion;
    }


    public function creser($number)  {
        $this->altura += $number;

    }

}
?>