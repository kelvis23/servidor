<?php
interface Paint
{
 //1.Atributo : almasen de constantes 
 public const PI =3.14592;
 public const MAx_SZE = "200px";
 //2.Constructores (no tiene) 
 //3.getter /settrrs (no suele tener)
 //4. metodos:  simpre absolute (no se pone "abtract")
    public function draw();
}
?>