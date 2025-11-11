<?php
class Pelicula extends Info {
   private string $Director;
    private int $year;
    private int $recaudacion;
  

  public function __construct(string $Director, int $recaudacion,int $year){
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
	
}

?>