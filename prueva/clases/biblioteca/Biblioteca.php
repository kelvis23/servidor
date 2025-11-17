<?php
class Biblioteca {
    private array $libros = [];

    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro; 
    }

    public function listarLibros(): void {
        foreach ($this->libros as $libro) {
           
            echo "Título: " . $libro->getTitulo() . ", Autor: " . $libro->getAutor() . ", Año: " . $libro->getYear() . "<br>";
        }
    }

    public function buscarPorAutor(string $autor): array {
        $resultado = [];
        foreach ($this->libros as $libro) {
            if (strtolower($libro->getAutor()) === strtolower($autor)) {
                $resultado[] = $libro;
            }
        }
        return $resultado;
    }
}
?>
