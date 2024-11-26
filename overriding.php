<?php 
class Produk{
    public $judul, 
            $penulis,
            $penerbit = "penerbit", 
            $harga,
            $halaman;
    public function __construct($judul, $penulis, $penerbit, $harga){ 
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
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
    public function infoLengkapProd(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}
class Komik extends Produk{ //Komik diizinkan menggunakan property Produk/parentnya
    public $jumlahHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
        $this-> jumlahHalaman = $jumlahHalaman;
    }
    public function infoLengkapProd()
    {
        $str = "Komik : " . parent::infoLengkapProd() . " - {$this->halaman} Halaman."; //parent untuk memanggil dari parentnya
        return $str;
    }
}
class Game extends Produk{
        public $wktMain;
        public function __construct($judul, $penulis, $penerbit, $harga, $wktMain){
            parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
        }
        public function infoLengkapProd(){
        $str = "Game : " . parent::infoLengkapProd() . " - {$this->wktMain} Level."; //::adalah method static
        return $str;
    }
}
class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp.{$produk->harga})";
        return $str; //setiap function akhiri codenya dengan return agar dapat ditampilkan
    }
}
$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen", 3000, 100);
$produk2 = new Game("The Last of Us", "Makoto Sayaka", " ", 2000, 20);
echo $produk1->infoLengkapProd();
echo "<br>";
echo $produk2->infoLengkapProd();

