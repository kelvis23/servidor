<?php
abstract class Inventario
{
    private int $numeroSerie;
    private string $marca;
    private string $modelo;

    public function __construct(int $numeroSerie, string $marca, string $modelo)
    {
        $this->numeroSerie = $numeroSerie;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getNumeroSerie(): int
    {
        return $this->numeroSerie;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setNumeroSerie(int $numeroSerie): void
    {
        $this->numeroSerie = $numeroSerie;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

 public function __tostring(){
    return "numero de serie $this->numeroSerie marca $this->marca modelo $this->modelo";
 }




}
?>