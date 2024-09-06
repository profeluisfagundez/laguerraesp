<?php
define('PALOS', array('o', 'c', 'e', 'b'));

class Carta
{
    private $palo;
    private $num;
    private $imagen;

    public function __construct($palo, $num)
    {
        $this->palo = PALOS[$palo];
        $this->num = $num;
        $this->imagen = "imagenes/c_" . PALOS[$palo] . "_" . $this->getNumero() . ".png";
    }

    public function getNumero()
    {
        return $this->num;
    }

    public function setNumero($valor)
    {
        $this->num = $valor;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getPalo()
    {
        return $this->palo;
    }

    public function setPalo($valor)
    {
        $this->palo = $valor;
    }

    public function __toString()
    {
        return "<img src='" . $this->imagen . "'>";
    }
}
