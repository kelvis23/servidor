<?php
class Usuario{
    private string $nombre;
    private string $email;
    private int $password;
    private array $faborito;

    public function __construct(string $nombre, string $email, int $password, array $faborito){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->faborito = $faborito;
    }
	public function getNombre() {
        return $this->nombre;
    }

	public function getEmail() {
        return $this->email;
    }

	public function getPassword() {
        return $this->password;
    }

	public function getFaborito() {
        return $this->faborito;
    }

	public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

	public function setEmail(string $email) {
        $this->email = $email;
    }

	public function setPassword(int $password) {
        $this->password = $password;
    }

	public function setFaborito(array $faborito) {
        $this->faborito = $faborito;
    }

	
}
?>