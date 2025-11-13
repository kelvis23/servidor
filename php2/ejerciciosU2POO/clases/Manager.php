<?php

class Manager extends Empleade{
    private int $seniority;
    public function __construct(int $seniority, $name,  $surname,  $salry,  $telephone){
               parent::__construct($name,  $surname,  $salry,  $telephone);
        $this->seniority = $seniority;
    }
	public function getSeniority(): int {return $this->seniority;}

	public function setSeniority(int $seniority): void {$this->seniority = $seniority;}

	
}
?>