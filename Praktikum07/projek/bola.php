<?php
class Bola
{
    private $r;
    const PHI = 3.14;

    function __construct($jari)
    {
        $this->r = $jari;
    }

    function getVolume()
    {
        $volume = 3/4 * self::PHI * ($this->r*$this->r*$this->r);
        return $volume;
    }

    function getLuasPermukaan() 
    {
        $luas = 4 * self::PHI * ($this->r*$this->r);
        return $luas;
    }
}
$Bola = new Bola(7);
echo "Volume bola : " . $Bola->getVolume() . "<br>";
echo "Luas bola : " . $Bola->getLuasPermukaan() . "<br>";
