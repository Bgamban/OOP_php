<?php 
class Produk{
    public $judul, 
            $penulis,
            $penerbit = "penerbit", 
            $harga = 0,
            $halaman,
            $wktMain,
            $type;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "rar", $harga, $halaman, $wktMain, $type){ 
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        $this -> halaman = $halaman;
        $this -> wktMain = $wktMain;
        $this -> type = $type;
    }
    public function __destruct(){
        echo "ini adalah method yang terakhir dieksekusi";
    }
    public function __toString()
    {
        return "{$this->judul}(Rp.{$this->harga})";
    }
    public function getLabel(){ 
        return "$this->penulis, $this-> penerbit, $this-> halaman";
    }
    public function infoLengkap(){
        $str = "{$this->type} | {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if($this->type == "Komik"){
            $str .= " - {$this->halaman} Halaman.";
        } else if($this-> type == "Game"){
            $str .= " -{$this->wktMain} Jam.";
        }
        return $str;
    }
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp.{$produk->harga})";
        return $str; //setiap function akhiri codenya dengan return agar dapat ditampilkan
    }
}
$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen", 3000, 100, 0, 
"Komik");
$produk2 = new Produk("The Last of Us", "Makoto Sayaka", " ", 2000, 0, 20,
"Game");
echo $produk1->infoLengkap();

