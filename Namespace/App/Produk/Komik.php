<?php 
class Komik extends Produk implements InfoProduk{
    public $jumlahHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
    public function infoLengkapProd()
    {
        $str = "Komik : " . $this-> getInfo() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}