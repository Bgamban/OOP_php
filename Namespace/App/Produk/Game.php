<?php 
class Game extends Produk implements InfoProduk{
    public $wktMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $wktMain){
        parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->wktMain = $wktMain;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
    public function infoLengkapProd(){
    $str = "Game : " . $this->getInfo() . " - {$this->wktMain} Level.";
    return $str; 
}
}