<?php

class Segiempat{
    public $sisi;

    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    function hitungLuas(){
        return $this->sisi * $this->sisi;
    }
}

class Segitiga{
    public $alas;
    public $tinggi;

    function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    function hitungLuas(){
        return $this->alas * $this->tinggi / 2;
    }
}


$SegiEmpat1 = new Segiempat(4);
print $SegiEmpat1->hitungLuas();

$Segitiga1 = new Segitiga(4, 5);
print $Segitiga1->hitungLuas();
