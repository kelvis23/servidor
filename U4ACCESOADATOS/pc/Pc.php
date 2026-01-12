<?php 
class Pc{

function __construct(
  private string $id,  /*no es autoincremental en la bd*/
 private string $owner, 
 private string $brand,
 private float   $price,
  private array $components = []
 ){}
public function addComponent($c){
	 $this->components[] = $c;
}
public function getId(): string {return $this->id;}

	public function getOwner(): string {return $this->owner;}

	public function getBrand(): string {return $this->brand;}

	public function getPrice(): float {return $this->price;}

	public function setId(string $id): void {$this->id = $id;}

	public function setOwner(string $owner): void {$this->owner = $owner;}

	public function setBrand(string $brand): void {$this->brand = $brand;}

	public function setPrice(float $price): void {$this->price = $price;}

	 public function getComponents(){return $this->components;}
	 public function setComponents(array $components): void {$this->components = $components;}
	 }

?>