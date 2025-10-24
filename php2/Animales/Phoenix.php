<?php
class Phoenix{
      //1.atrivutos
    private string $name;
    private $age =1;
    
    public function __construct(string $name,$age){
        $this ->name = $name;
        $this ->age = $age;
    }
        public function getName(){
            return $this->name;
        }
	

    public function setName(string $name){
        $this->name = $name;
    }
    public function setAge(string $name){
        $this->name = $name;
    }

    //funcion  happyBirthday que sume 1 año al animal y devuelbe su edad final . si tenia -1 que devuelva false

    public function happyBirthday($age){
       if($this -> age<0){
        return false;
       }else{
       $this ->age++;
       return $this -> age;
       }
	
    }
}

	
  

	
    
?>
	