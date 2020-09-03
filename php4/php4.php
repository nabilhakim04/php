<?php
  
class Laptop{
 
    public $namaLaptop, 
            $jenisprocie,
            $jumlahram,
            $jenisvga;
  
    public function __construct($namaLaptop = "",$jenisprocie = "",$jumlahram = 0,$jenisvga = ""){
            $this->namaLaptop = $namaLaptop;
            $this->jenisprocie = $jenisprocie;
            $this->jumlahram = $jumlahram;
            $this->jenisvga = $jenisvga;
        }
     
    public function __destruct(){
        echo "<br> Object $this->namaLaptop telah dihapus";
        }
 
    public function getData(){
         return "$this->jenisprocie, $this->jumlahram, $this->jenisvga";
    }
}
 
//membuat class untuk mencoba Object Type
class getInfoLaptop{
      //parameter hanya dapat diisi object yang berasal dari class Hewan
    public function getInfo(Laptop $object){
      return "{$object->namaLaptop}, {$object->getData()}";
      }
}
  
$asus = new Laptop("Asus", "Ryzen", 12, "Gtx 1050");
 
$pencetakInfo = new getInfoLaptop();
 
//mencetak data sekaligus mengolah data object rusa 
echo $pencetakInfo->getInfo($asus);
 
unset($Laptop);
  
?>