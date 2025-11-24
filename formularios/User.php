<?php
class User{
    public function __construct(
        private string $name,
        private string $pass,
        private string $email,
        private int $age,
        private array $studies,  //DAW, DAM, ASIR (checkboxes)
    ){}

    public function __tostring(){
        return "{$this->name}
         {$this->email}
        {$this->pass}
        {$this->age}".implode(",", $this->studies);
    }
}