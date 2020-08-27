<?php

 //membuat class 
class Laptop{

  //membuat attribute 
    public $merekLaptop, 
            $jenisVGA,
            $jumlahRam,
            $jenisProcessor;

  //membuat method 
    public function __construct($merekLaptop = "",$jenisVGA = "",$jumlahRam = 0,$jenisProcessor = ""){
            $this->merekLaptop = $merekLaptop;
            $this->jenisVGA = $jenisVGA;
            $this->jumlahRam = $jumlahRam;
            $this->jenisProcessor = $jenisProcessor;
        }

    public function getData(){
         return "$this->merekLaptop, $this->jenisVGA, $this->jumlahRam, $this->jenisProcessor";
    }
}

//membuat object dari 
$asustuf = new Laptop("ASUSTUF", "GTX1050", 12, "RYZEN53550H");
echo "Info Laptop pertama: ", $asustuf->getData();

?>
