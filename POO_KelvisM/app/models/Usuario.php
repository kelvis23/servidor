<?php
class Usuario{
    private string $nombre;
    private string $email;
    private string $password;
    private array $favoritos;

    public function __construct(string $nombre, string $email, string $password, array $favoritos){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->favoritos = $favoritos;
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
        return $this->favoritos;
    }

	public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

	public function setEmail(string $email) {
        $this->email = $email;
    }

	public function setPassword(string $password) {
        $this->password = $password;
    }

	public function setFaborito(array $favoritos) {
        $this->favoritos = $favoritos;
    }

    //metodos
	
}
?>