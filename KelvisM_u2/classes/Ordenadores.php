<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/classes/Inventario.php";
class Ordenadores extends Inventario{

    private int $potencia;
    private bool $tipo;
    public function __construct( $numeroSerie,  $marca,  $modelo, int $potencia, bool $tipo)
    {
        parent :: __construct($numeroSerie,  $marca,  $modelo);
        $this->potencia = $potencia;
        $this->tipo = $tipo;
    }

public function getPotencia(): int {return $this->potencia;}

	public function getTipo(): bool {return $this->tipo;}

	

}
?>