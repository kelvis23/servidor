<?php
abstract class Info{
   protected ?int $id;
    protected string $titulo;
    protected int $duracion;
    protected array $genero;

    public function __construct(
        string $titulo,
        int $duracion,
        array $genero,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->duracion = $duracion;
        $this->genero = $genero;
    }
	public function getTitulo() {
        return $this->titulo;
    }

	public function getDuracion() {
        return $this->duracion;
    }

	public function getGenero() {
        return $this->genero;
    }

	public function setTitulo(string $titulo) {
        $this->titulo = $titulo;
    }

	public function setDuracion(int $duracion) {
        $this->duracion = $duracion;
    }

	public function setGenero(array $genero) {
        $this->genero = $genero;
    }


    public function __toString(): string {
    return "Título: $this->titulo<br>" .
           "Duración: " . $this->duracionEnHoras() . "<br>" .
           "Géneros: " . implode(", ", $this->genero) . "<br>";
}

    //metodos
      public function genero(string $nuevoGenero) {
         //Comprueba si el valor $favoritos no está dentro del arreglo $this->favoritos. Si no está, lo agrega al arreglo
        if (!in_array($nuevoGenero, $this->genero)) {
            $this->genero[] = $nuevoGenero;
        }

        
    }
	   public function eliminarGenero(string $genero) {
        $index = array_search($genero, $this->genero);
        if ($index !== false) {
            unset($this->genero[$index]);
            $this->genero = array_values($this->genero);
        }
    }


     public function duracionEnHoras(): string {
        //intdiv(a, b) hace una división entera, es decir, solo toma la parte entera del
        $horas = intdiv($this->duracion, 60);
        $minutos = $this->duracion % 60;
        return $horas . "h " . $minutos . "m";
    }
    
	

  
    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
?>