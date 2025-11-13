<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/app/models/Info.php";


class Documentales extends Info
{
    private string $tema;
    private int $year;
    private string $narrador;

    public function __construct(string $tema, string $narrador, int $year, $titulo, $duracion, $genero){
        parent::__construct($titulo, $duracion, $genero);
        $this->tema = $tema;
        $this->narrador = $narrador;
        $this->year = $year;
    }
    public function getTema() {
        return $this->tema;
    }

    public function getNarrador(){
        return $this->narrador;
    }

    public function getAños(){
        return $this->year;
    }

    public function setTema(string $tema){
        $this->tema = $tema;
    }

    public function setNarrador(string $narrador){
        $this->narrador = $narrador;
    }


    public function setAño(int $year){
        $this->year = $year;
    }

    //metodo
        public function __toString(): string {
        $infoBase = parent::__toString();
        return $infoBase .
               "Tema: $this->tema<br>" .
               "Narrador: $this->narrador<br>" .
               "Año: $this->year<br>";
    }
    
      public function cambiarNarrador(string $nuevoNarrador) {
        $this->narrador = $nuevoNarrador;
        
    }

    // Método para cambiar el tema
    public function cambiarTema(string $nuevoTema) {
        $this->tema = $nuevoTema;
        
    }
}


?>