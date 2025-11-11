<?php
class Pelicula extends Info {
   private string $Director;
    private int $año;
    private int $recaudacion;
  

  public function __construct(string $Director, int $recaudacion,int $año){
    $this->Director = $Director;
    $this->recaudacion = $recaudacion;
   $this->año=$año;
}
	public function getDirector() {
        return $this->Director;
    }

	public function getRecaudacion() {
        return $this->recaudacion;
    }

	 	public function getAños() {
        return $this->año;
    }


	public function setDirector(string $Director) {
        $this->Director = $Director;
    }

	public function setRecaudacion(int $recaudacion) {
        $this->recaudacion = $recaudacion;
    }

	public function setAño(int $año) {
        $this->año = $año;
    }
	
}

?>