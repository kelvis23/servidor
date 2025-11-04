<?php
class Empleade
{
    private string $name;
    private string $lestname;
    private float $salary = -1;


    public function __construct(string $name, string $lestname, float $salary)
    {
        $this->name = $name;
        $this->lestname = $lestname;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getLestname()
    {
        return $this->lestname;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setLestname(string $lestname)
    {
        $this->lestname = $lestname;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function __tostring()
    {
        return "<p> Nombre : " . $this->name . " Apellido: " . $this->lestname . " sueldo: " . $this->salary . "</p>";
    }

    public function getNombreCompleto()
    {
        $res = " $this->name  $this->lestname";
        return $res;
    }

    public static function pagarImpuestos($salary){
     $total = 0;
     if($salary <=0){
        $total = -1;
     }else if ($salary <= 12450) {
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

}
