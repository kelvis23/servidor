<?php
class Componet{
// atrivutos y esas cosas
   function __construct(
        
        private string $name,
        private string $brand,
        private string $model,
        private int $id = -1
    ){}

public function getName(): string {return $this->name;}

	public function getBrand(): string {return $this->brand;}

	public function getModel(): string {return $this->model;}
    	public function getId(): int {return $this->id;}


	public function setName(string $name): void {$this->name = $name;}

	public function setBrand(string $brand): void {$this->brand = $brand;}

	public function setModel(string $model): void {$this->model = $model;}

		public function setId(int $id): void {$this->id = $id;}

    
    
    public function __toString(){
        return "id: $this->id -Name: $this->name -Bran: $this->brand -Model: $this->model";
    }


    

}