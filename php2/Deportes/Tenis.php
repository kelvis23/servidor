<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/php2/Deportes/Sport.php";
class Tenis extends Sport{
    public function __construct(
        private string $court,
        private $rackets,
        $type,
         $contact, 
         $numPlayers){
         parent ::__construct($type,$contact,$numPlayers);
    }
     public function play(): string{
        return "estoy jugando al tenis";
    }
     public function __tostring(){
         $ret = "pista ". $this -> court."tipo de raqueta". $this->rackets. "-". parent::__tostring() ;
         
        return $ret;

    }


   
}
?>