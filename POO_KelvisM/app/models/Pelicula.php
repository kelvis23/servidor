<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/app/models/Info.php";
class Pelicula extends Info {
   private string $Director;
    private int $year;
    private int $recaudacion;
  

  public function __construct(string $Director, int $recaudacion,int $year, $titulo, $duracion, $genero){
     parent::__construct($titulo, $duracion, $genero);
    $this->Director = $Director;
    $this->recaudacion = $recaudacion;
   $this->year= $year;
}
	public function getDirector() {
        return $this->Director;
    }

	public function getRecaudacion() {
        return $this->recaudacion;
    }

	 	public function getAños() {
        return $this->year;
    }


	public function setDirector(string $Director) {
        $this->Director = $Director;
    }

	public function setRecaudacion(int $recaudacion) {
        $this->recaudacion = $recaudacion;
    }

	public function setAño(int $year) {
        $this->year = $year;
    }
	public function __toString(): string {
    $info = parent::__toString();

    return $info .
           "Director: $this->Director<br>" .
           "Año: $this->year<br>" .
           "Recaudación: $this->recaudacion millones<br>";
}
    // metodos

    public function actualizarRecaudacion(int $nuevaRecaudacion): void {
    $this->recaudacion = $nuevaRecaudacion;
    echo "La recaudación de la película '{$this->getTitulo()}' ha sido actualizada a {$this->recaudacion} millones.\n";
}
}

?>