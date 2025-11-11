<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/simulacro_examen/examen2/clases/Planta.php";
//include_once $_SERVER["DOCUMENT_ROOT"]."/clases/Planta.php";
class Flores extends Planta{
    private string $floracion;

    public function __construct($especie,  $altura, string $floracion){
         parent ::__construct($especie,  $altura);
        $this->floracion = $floracion;
        
    }
    public function getFloracion(): string {
        return $this->floracion;
    }

	public function setFloracion(string $floracion): void {
        $this->floracion = $floracion;
    }
  public function __tostring(){
    return "<p>especie : $this->especie altura : $this->altura  florasion: $this->floracion </p>";

}
	
	
	
   



}


?>