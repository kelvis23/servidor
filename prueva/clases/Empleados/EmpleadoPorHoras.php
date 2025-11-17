<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/Empleados/Empleado.php";
class EmpleadoPorHoras extends Empleado implements Trabajable{
    private int $hora;
    private float $pagoHora;
    public function __construct($nombre,  $year,int $hora, float $pagoHora){
        parent:: __construct($nombre,  $year);
        $this->hora = $hora;
        $this->pagoHora = $pagoHora;
    }
    public function getHora(): int
    {
        return $this->hora;
    }

    public function getPagoHora(): float
    {
        return $this->pagoHora;
    }

    public function setHora(int $hora): void
    {
        $this->hora = $hora;
    }

    public function setPagoHora(float $pagoHora): void
    {
        $this->pagoHora = $pagoHora;
    }

     public function calcularSalario() {
        return $this->hora * $this->pagoHora;
    }

    public function getResumen() {
        return "Empleado por Horas: {$this->nombre}, Edad: {$this->year}, Horas: {$this->hora}, Salario: {$this->calcularSalario()}€";
    }
    
}

?>