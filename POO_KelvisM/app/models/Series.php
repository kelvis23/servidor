<?php
class Pelicula extends Info{
   private int $temporadas;
    private int $capitulos;
    private bool $finalizado;
   
public function __construct(int $temporadas, int $capitulos, bool $finalizado){
    $this->temporadas = $temporadas;
    $this->capitulos = $capitulos;
    $this->finalizado = $finalizado;
}
	public function getTemporadas() {
        return $this->temporadas;
    }

	public function getCapitulos() {
        return $this->capitulos;
    }

	public function getFinalizado() {
        return $this->finalizado;
    }

	public function setTemporadas(int $temporadas) {
        $this->temporadas = $temporadas;
    }

	public function setCapitulos(int $capitulos) {
        $this->capitulos = $capitulos;
    }

	public function setFinalizado(bool $finalizado) {
        $this->finalizado = $finalizado;
    }

}
?>