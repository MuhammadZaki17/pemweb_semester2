<?php 
class manusia {
    public $nama;
    public $umur;
    

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function getInfo(){
        return "Nama : ". $this->nama .", Umur : ". $this->umur;
    }
}

// membuat objek nya

$zaki = new manusia();
$zaki->setNama("Muhammad Zaki");
$zaki->setUmur(20);
echo $zaki->getInfo(); 