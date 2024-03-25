<?php 
class Mahasiswa {
    public $nama_lengkap;
    public $nilai_uts;
    public $matkul;
    public $nilai_uas;
    public $nilai_tugas;
    public $nilaiAkhir;
    
    public function __construct($nama_lengkap, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas){
        $this->nama_lengkap = $nama_lengkap;
        $this->matkul = $matkul;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->nilai_tugas = $nilai_tugas;
        $this->nilaiAkhir = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;
    }
    
    public function setNama(){
        return $this->nama;
    }

    public function matkul(){
        return $this->matkul;
    }

    public function nilaiUTS(){
        return $this->nilai_uts;
    }

    public function nilaiUAS(){
        return $this->nilai_uas;
    }

    public function nilaiPraktikum(){
        return $this->nilai_tugas;
    }

    public function rata_rata(){
        return $this->nilaiAkhir;
    }

    public function hasilAkhir(){
        return $this->nilaiAkhir >= 60 ? 'Lulus' : 'Tidak Lulus';
    }

    public function predikat(){
        if ($this->nilaiAkhir >= 85) {
            return 'A';
        } elseif ($this->nilaiAkhir >= 70) {
            return 'B';
        } elseif ($this->nilaiAkhir >= 60) {
            return 'C';
        } else{
            return'D';}
    }
}
