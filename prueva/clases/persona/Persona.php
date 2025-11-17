<?php
class Persona{
    private string $nombre;
    private string $edad;

public function __construct(string $nombre, string $edad){
    $this->nombre = $nombre;$this->edad = $edad;
}
	
    public function saludar(){
        echo" hola , mi nombre es $this->nombre y tengo $this->edad años";
    }
}

?>