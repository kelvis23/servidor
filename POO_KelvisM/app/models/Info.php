<?php
abstract class Info{
    private string $titulo;

    private int $duracion;
    private array $genero;

public function __construct(string $titulo, int $duracion, array $genero){
    $this->titulo = $titulo;
    $this->duracion = $duracion;
    $this->genero = $genero;
}
	public function getTitulo() {
        return $this->titulo;
    }

	public function getDuracion() {
        return $this->duracion;
    }

	public function getGenero() {
        return $this->genero;
    }

	public function setTitulo(string $titulo) {
        $this->titulo = $titulo;
    }

	public function setDuracion(int $duracion) {
        $this->duracion = $duracion;
    }

	public function setGenero(array $genero) {
        $this->genero = $genero;
    }

	
	
}
?>