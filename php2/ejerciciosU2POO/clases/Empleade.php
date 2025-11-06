<?php
class Empleade
{
    private string $name;
    private string $lestname;
    private float $salary = -1;

    private array $telefono;


    public function __construct(string $name, string $lestname,float $salary , array $telefono){
    
        $this->name = $name;
        $this->lestname = $lestname;
        $this->salary =$salary;
        $this->telefono = $telefono;
    }

    public function getName() {
        return $this->name;
    }

    public function getLestname(){
        return $this->lestname;
    }
   public function getSalary(){
        return $this->salary;
    }
    public function getTelefono(){
        return $this->telefono;
    }
  

    public function setName(string $name){
        $this->name = $name;
    }

    public function setLestname(string $lestname){
        $this->lestname = $lestname;
    }
 public function setSalary(float $salary) {
       $this->salary= $salary;
    }
    public function setTelefono(array $telefono) {
        $this->telefono = $telefono;
    }

    public function __tostring(){
        return "<p> Nombre : " . $this->name . " Apellido: " . $this->lestname . " sueldo: " . $this->salary . "</p>";
    }

    public function getNombreCompleto(){
        $res = " $this->name  $this->lestname";
        return $res;
    }

    public static function pagarImpuestos($salary){
        $total = 0;
        if ($salary <= 0) {
            $total = -1;
        } else if ($salary <= 12450) {
            $total = $salary * 0.19;
        } else if ($salary <= 20200) {
            $total = 12450 * 0.19 + ($salary - 12450) * 0.24;
        } else if ($salary <= 35200) {
            $total = 12450 * 0.19 + (20200 - 12450) * 0.24 + ($salary - 20200) * 0.30;
        } else {
            $total = 12450 * 0.19 + (20200 - 12450) * 0.24 + (35200 - 20200) * 0.30 + ($salary - 35200) * 0.37;
        }

        return round($total, 2);
    }

    public  function anadirTelefono(string $telefono){
       $res = $this->telefono[]=$telefono;
       return $res;
    }


    public function  listarTelefonos(){
        $fun[] = $this->telefono;

        for ($i=0;$i < count($fun);$i++){
           return implode(',',$fun[$i]);
        }
    }
    public function  vaciarTelefonos (){
         return $this->telefono = []; 
         
        }
    
    public function  toHtml(){
        $salry = $this->salary;
        $impuesto = self ::  pagarImpuestos($salry);
        $res = "<p>Nombre: " . $this->name . 
                " Apellido: " . $this->lestname . 
                " Sueldo: " . $this->salary ." impuesto: $impuesto </p>";
    echo $res;
    echo "<ul>";
    foreach ($this->telefono as $tel) {
        echo "<li>$tel</li>";
    }
    echo "</ul>";
    }
}
