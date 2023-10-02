<?php
class Treballador
{
    public $nom;
    public $sou;

    function __construct($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function showEmpleado()
    {
        return("El nom del treballador és " . $this->nom . " els seu sou és de " . $this->sou . " euros.</br>");
    }

    public function is_salary()
    {
        if ($this->sou <= 2000)
            return("No ha de pagar impostos, ja que el teu sou es menor o igual a 2000 euros. </br>");
        else
            return("Ha de pagar impostos, ja que el teu sou major a 2000euros. </br>");
    }
}
?>