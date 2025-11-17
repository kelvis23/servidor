<?php
class Libro {
    private string $titulo;
    private string $autor;
    private int $year;

    public function __construct(string $titulo, string $autor, int $year){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->year = $year;
    }

    public function getTitulo(): string { return $this->titulo; }
    public function getAutor(): string { return $this->autor; }
    public function getYear(): int { return $this->year; }
}
?>
