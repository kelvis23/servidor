<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/Empleados/Empleado.php";

class EmpleadoFijo extends Empleado implements Trabajable
{
    private float $salarioMensual;
    public function __construct($nombre, $year, float $salarioMensual)
    {
        parent::__construct($nombre, $year);
        $this->salarioMensual = $salarioMensual;
    }
    public function getSalarioMEnsual(): float
    {
        return $this->salarioMensual;
    }

    public function setSalarioMEnsual(float $salarioMensual): void
    {
        $this->salarioMensual = $salarioMensual;
    }

      public function calcularSalario() {
        return $this->salarioMensual;
    }
     public function getResumen() {
        return "Empleado Fijo: {$this->nombre}, Edad: {$this->year}, Salario: {$this->calcularSalario()}€";
    }


}

?>