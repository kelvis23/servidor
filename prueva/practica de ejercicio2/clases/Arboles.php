<?php
class Arboles extends Planta
{
    private bool $perenne;
    public function __construct(bool $perenne, $especie, $altura)
    {
        $this->perenne = $perenne;
        parent::__construct($especie, $altura);
    }
    public function getPerenne(): bool
    {
        return $this->perenne;
    }

    public function setPerenne(bool $perenne): void
    {
        $this->perenne = $perenne;
    }


    public function creser($number){
        $this->altura +=$number;

    }



}
?>