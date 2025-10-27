<?php
abstract class Sport{
    public function __construct(
    protected String $type,
    protected bool $contact,
    protected int $numPlayers,
    ){}
    //lo de arriva equivale a esto
 /*   
    protected String $type;
    protected bool $contact;
    protected int $numPleayer;
    public function __construct(String $type, bool $contact, int $numPleayer){
    $this->type = $type;
    $this->contact = $contact;
    $this->numPleayer = $numPleayer;
    }
	*/
 public function __tostring(){
        $ret = "Tipo: ". $this ->type ." contacto: ";
        if($this -> contact){
            $ret .= "si";
        }else{
            $ret .= "no";
        }
        $ret .= "nimero de jugadores". $this -> numPlayers;
        return $ret;

    }

    public function addPlayers(int $num){
        $this -> numPlayers += $num;
        return $this -> numPlayers;
    }

    public abstract function play():string;
}

?>