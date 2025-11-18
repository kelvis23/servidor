<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/classes/Inventario.php";

class Moviles extends Inventario
{

    private int $numeroTelefono;
    private int $pulgadas;

    public function __construct(  $numeroSerie,  $marca,  $modelo,int $numeroTelefono, int $pulgadas)
    {
        parent :: __construct($numeroSerie,  $marca,  $modelo);
        $this->numeroTelefono = $numeroTelefono;
        $this->pulgadas = $pulgadas;
    }
    public function getNumeroTelefono(): int {return $this->numeroTelefono;}

	public function getPulgadas(): int {return $this->pulgadas;}

	

}
?>