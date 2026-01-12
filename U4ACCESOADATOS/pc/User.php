<?php
class User{
    private string $name;
    private string $pass;
    private int $id ;

    public function __construct(string $name, string $pass, int $id = -1){$this->name = $name;$this->pass = $pass;$this->id = $id;}
	public function __toString(){
        return "$this->name $this->id";
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}