<?php
class Vehiculo
{
    private string $marca;
    private string $modelo;
    private int $velosidad ;


    public function __construct(string $marca, string $modelo, int $velosidad =0)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velosidad = $velosidad ;
    }
    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getVelosidad(): int
    {
        return $this->velosidad;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setVelosidad(int $velosidad): void
    {
        $this->velosidad = $velosidad;
    }

    public function acelerar($cantidad){
        $this->velosidad+=$cantidad;
    }
    public function frenar($cantidad){
        $this->velosidad-=$cantidad;
        if($this->velosidad <0 ){
                  $this->velosidad =0;  
        }
    }

    public function __toString(){
        return "El Coche es un $this->marca $this->modelo y tiene una velosidad $this->velosidad ";
    }

}
?>