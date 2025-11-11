<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/app/models/Info.php";
class Series extends Info
{
    private int $temporadas;
    private int $capitulos;
    private bool $finalizado;

    public function __construct(int $temporadas, int $capitulos, bool $finalizado , $titulo, $duracion, $genero) {
      parent::__construct($titulo, $duracion, $genero);
        $this->temporadas = $temporadas;
        $this->capitulos = $capitulos;
        $this->finalizado = $finalizado;
    }
    public function getTemporadas() {
        return $this->temporadas;
    }

    public function getCapitulos(){
        return $this->capitulos;
    }

    public function getFinalizado()  {
        return $this->finalizado;
    }

    public function setTemporadas(int $temporadas) {
        $this->temporadas = $temporadas;
    }

    public function setCapitulos(int $capitulos){
        $this->capitulos = $capitulos;
    }

    public function setFinalizado(bool $finalizado) {
        $this->finalizado = $finalizado;
    }

    //metodo

     public function __toString(): string {
        $infoBase = parent::__toString();
        return $infoBase .
               "Temporadas: $this->temporadas<br>" .
               "Capítulos: $this->capitulos<br>" .
               "Finalizada: " . ($this->finalizado ? "Sí" : "No") . "<br>";
    }

    public function agregarTemporada(int $nuevosCapitulos): void{
        $this->temporadas++;
        $this->capitulos += $nuevosCapitulos;
        echo "Se ha agregado una nueva temporada a '{$this->getTitulo()}'. Ahora tiene $this->temporadas temporadas y $this->capitulos capítulos.\n";
    }
    public function finalizarSerie(): void {
        $this->finalizado = true;
        echo "La serie '{$this->getTitulo()}' ha sido marcada como finalizada.\n";
    }
}

?>