<?php
class Balok
{
    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getVolume()
    {
        return $this->panjang*$this->lebar*$this->tinggi;
    }

    public function getLuasPermukaan() 
    {
        return 2 * (($this->panjang*$this->lebar)+($this->panjang*$this->tinggi)+($this->lebar*$this->tinggi));
    }
}
$Balok = new Balok(2, 3, 7);
echo "Volume balok : " . $Balok->getVolume() . "<br>";
echo "Luas balok : " . $Balok->getLuasPermukaan() . "<br>;";
