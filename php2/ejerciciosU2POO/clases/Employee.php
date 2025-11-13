<?php

abstract  class Employee    {
    private string $name;
    private string $surname;
    private float $salary;
    private array $telephone;

    public function __construct(string $name, string $surname, float $salary, array $telephone){$this->name = $name;$this->surname = $surname;$this->salary = $salary;$this->telephone = $telephone;}
	public function getName(): string {return $this->name;}

	public function getSurname(): string {return $this->surname;}

	public function getSalary(): float {return $this->salary;}

	public function getTelephone(): array {return $this->telephone;}

	public function setName(string $name): void {$this->name = $name;}

	public function setSurname(string $surname): void {$this->surname = $surname;}

	public function setSalary(float $salary): void {$this->salary = $salary;}

	public function setTelephone(array $telephone): void {$this->telephone = $telephone;}


	
 
	
}
?>