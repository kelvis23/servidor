<?php
abstract class Planta{
    protected string $especie;
    protected float $altura;
    public function __construct(string $especie, float $altura){
        $this->especie = $especie;$this->altura = $altura;
    }
	public function getEspecie(): string {
        return $this->especie;
    }

	public function getAltura(): float {
        return $this->altura;
    }

	public function setEspecie(string $especie): void {
        $this->especie = $especie;
    }

	public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function crecer($cetimetros){
    $this -> altura += $cetimetros;
}

    
}


	


?>