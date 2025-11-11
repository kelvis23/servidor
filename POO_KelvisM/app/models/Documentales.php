<?php
class Documentales extends Info
{
    private string $tema;
    private int $año;
    private string $narrador;

    public function __construct(string $tema, string $narrador, int $año, $titulo, $duracion, $genero){
        parent::__construct($titulo, $duracion, $genero);
        $this->tema = $tema;
        $this->narrador = $narrador;
        $this->año = $año;
    }
    public function getTema() {
        return $this->tema;
    }

    public function getNarrador(){
        return $this->narrador;
    }

    public function getAños(){
        return $this->año;
    }

    public function setTema(string $tema){
        $this->tema = $tema;
    }

    public function setNarrador(string $narrador){
        $this->narrador = $narrador;
    }


    public function setAño(int $año){
        $this->año = $año;
    }

    //metodo
      public function cambiarNarrador(string $nuevoNarrador) {
        $this->narrador = $nuevoNarrador;
        echo "El narrador del documental '{$this->getTitulo()}' ahora es '{$this->narrador}'.\n";
    }

}
?>