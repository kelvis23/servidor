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

    //metodos
      public function Genero(string $nuevoGenero) {
        if (!in_array($nuevoGenero, $this->genero)) {
            $this->genero[] = $nuevoGenero;
        }

        
    }
	   public function eliminarGenero(string $genero) {
        $index = array_search($genero, $this->genero);
        if ($index !== false) {
            unset($this->genero[$index]);
            $this->genero = array_values($this->genero);
        }
    }

    //quisas implementar
     public function duracionEnHoras(): string {
        $horas = intdiv($this->duracion, 60);
        $minutos = $this->duracion % 60;
        return $horas . "h " . $minutos . "m";
    }
	
}
?>