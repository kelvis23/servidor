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
       
        self::$contadorUsuarios++;
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

	public function getFavoritos() {
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

	public function setFavoritos(array $favoritos) {
        $this->favoritos = $favoritos;
    }

    public function __toString() {
        //return " Usuario: $this->nombre \n  Email: $this->email \n  Contraseña : $this->password \n  Faboritos: " . implode(", ", $this->favoritos) . "\n" ;
        return " Usuario: $this->nombre <br>  Email: $this->email <br>  Contraseña : $this->password <br>  Faboritos: " . implode(", ", $this->favoritos) . "\n" ;
        
    }

    //metodos
    //este metodo es para añadir faboritos 
	   public function favorito($favoritos) {
        //Comprueba si el valor $favoritos no está dentro del arreglo $this->favoritos. Si no está, lo agrega al arreglo
         if (!in_array($favoritos, $this->favoritos)) {
              $this->favoritos[] = $favoritos;
         }
    }

    //listar faboritos 
     public function mostrarFavoritos() {
        if (empty($this->favoritos)) {
            echo "No tienes películas favoritas.\n";
        } else {
            foreach ($this->favoritos as $favoritos) {
                echo $favoritos . "\n";
            }
        }
    }


    //eliminar faborito
    public function eliminarFavorito($titulo) {
        //Busca el valor $titulo dentro del arreglo $this->favoritos y devuelve el indice
         $key = array_search($titulo, $this->favoritos);
    if ($key !== false) {

        unset($this->favoritos[$key]);
        // ordena  array para que los índices queden consecutivos
        $this->favoritos = array_values($this->favoritos);
        return true;
    }
    return false; // No se encontró el favorito
    }


    private static int $contadorUsuarios = 0;
      
    public static function getContadorUsuarios(): int {
        return self::$contadorUsuarios;
    }


}
?>