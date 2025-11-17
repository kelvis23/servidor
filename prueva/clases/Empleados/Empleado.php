<?php

abstract class Empleado
{
    protected string $nombre;
    protected int $year;
    public function __construct(string $nombre, int $year)
    {
        
        $this->nombre = $nombre;
        $this->year = $year;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }


    public  function  validarEdad($edad){
       return $this -> year >=18;


}
}


?>