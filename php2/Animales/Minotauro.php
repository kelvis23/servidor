<?php
class Minotauro{
    // los atrivutos estan
    private float $percentage;
   

    public function __construct(
        private string $name,
        private  int $age,
    ){
    }
    public function getName() {
        return $this->name;
    }

	public function setPercentage(string $name)
     {$this->name = $name;
    }

	public function getAge() {
        return $this->age;
    }

	public function setAge(int $age) {
        $this->age = $age;
    }

	
	

	public function getPet() {
        return $this->pet;}


	public function setPet(Cat $pet){
        $this->pet = $pet;
    }

	
	
}

