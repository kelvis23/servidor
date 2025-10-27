<?php
include $_SERVER["DOCUMENT_ROOT"]."/php2/Deportes/Sport.php";
class Rugby extends Sport{
    private String $teamName;
    public function __construct(String $teamName , $type,$contact,$numPlayers){
        $this->teamName = $teamName;
        parent ::__construct($type,$contact,$numPlayers);
    }
	public function getTeamName() {
        return $this->teamName;
    }

	
    public function setTeamName(String $teamName){
        $this->teamName = $teamName;
    }

	
    public function play(): string{
        return "estoy jugando al rugby";
    }
    public function __tostring(){
         $ret = "nombre del equipo ". $this -> teamName. "-". parent::__tostring() ;
         
        return $ret;

    }
}
?>