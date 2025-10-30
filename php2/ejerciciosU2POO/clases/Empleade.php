<?php
class Empleade {
    private String $name;
    private String $lestname;
    private float $salary = -1;


    public function __construct(String $name, String $lestname, float $salary){
        $this->name = $name;
        $this->lestname = $lestname;
        $this->salary = $salary;
    }
	public function getName(){
        return $this->name;
    }

	public function getLestname(){
        return $this->lestname;
    }

	public function getSalary(){
        return $this->salary;
    }

	public function setName(String $name) {
        $this->name = $name;
    }

	public function setLestname(String $lestname){
        $this->lestname = $lestname;
    }

	public function setSalary(float $salary){
        $this->salary = $salary;
    }
    
    public function __tostring(){
        return "<p> Nombre : ". $this->name." Apellido: ".$this->lestname." sueldo: ".$this->salary."</p>";
    }

    public function pagarImpuestos() {
        
    }
}