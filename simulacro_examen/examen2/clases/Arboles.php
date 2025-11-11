<?php
 include_once $_SERVER["DOCUMENT_ROOT"]."/simulacro_examen/examen2/clases/Planta.php";
 //include_once $_SERVER["DOCUMENT_ROOT"]."/clases/Planta.php";

class Arboles extends Planta{
    
    private bool $perenne;

   public function __construct( $especie,  $altura,bool $perenne ){
    parent ::__construct($especie,  $altura);
    $this->perenne = $perenne;
    
}
	public function getPerenne(): bool {
        return $this->perenne;}

	public function setPerenne(bool $perenne): void {
        $this->perenne = $perenne;
    }

    public function __tostring(){
    return "<p> $this->especie : altura  $this->altura  su mes de florasion $this->perenne </p>";

}

	

}