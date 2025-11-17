<?php

class CuentaBancaria{
    private string $titular;
    private float $saldo;
public function __construct(string $titular, float $saldo){$this->titular = $titular;$this->saldo = $saldo;}
	
    public function depositar($cantidad){
        $this->saldo+=$cantidad;
    }
     public function retirar($cantidad){
        $this->saldo-=$cantidad;
    }
    public function mostrarSaldo(){
        echo "tu saldo actual es de $this->saldo";
    }
}

?>