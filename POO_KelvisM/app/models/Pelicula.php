<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/app/models/Info.php";
class Pelicula extends Info {
    private string $director;
    private int $year;
    private int $recaudacion;
  

 public function __construct(
        string $titulo,
        int $duracion,
        array $genero,
        string $director,
        int $year,
        int $recaudacion,
        ?int $id = null
    ) {
        parent::__construct($titulo, $duracion, $genero, $id);

        $this->director = $director;
        $this->year = $year;
        $this->recaudacion = $recaudacion;
    }
	public function getDirector() {
        return $this->director;
    }

	public function getRecaudacion() {
        return $this->recaudacion;
    }

	 	public function getYear() {
        return $this->year;
    }


	public function setDirector(string $director) {
        $this->director = $director;
    }

	public function setRecaudacion(int $recaudacion) {
        $this->recaudacion = $recaudacion;
    }

	public function setYear(int $year) {
        $this->year = $year;
    }
public function __toString(): string {
    $info = parent::__toString();

    return $info .
           "Director: {$this->director}<br>" .
           "Año: {$this->year}<br>" .
           "Recaudación: {$this->recaudacion} millones<br>";
}
    // metodos

    public function actualizarRecaudacion(int $nuevaRecaudacion): void {
    $this->recaudacion += $nuevaRecaudacion;
    }
}

?>