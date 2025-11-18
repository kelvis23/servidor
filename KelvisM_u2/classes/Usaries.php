<?php
class Usaries
{
    private int $id;
    private string $nombre;
    private array $dispositivos;

    public function __construct(int $id, string $nombre, array $dispositivos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->dispositivos = $dispositivos;
    }

    public function nuevoDispositivo($nuevo){
        $this->dispositivos[] = $nuevo;
    }

    public function resiverNumero ($numero){
        $reesultado =0;
        foreach ($this->dispositivos as $dispositivo){
            if(strtolower($dispositivo->getNumeroSerie())=== strtolower($numero)){
                $reesultado =1;
            }
        }
        return $reesultado;
    }

    public function __toString(){
        return "id: $this->id <br>
         nombre: $this->nombre <br>
         dispositivos: " . implode(" , ",$this->dispositivos) ;
    }

    

}
?>