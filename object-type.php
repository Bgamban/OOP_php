<?php 

class Produk{
    public $judul, //Property
            $penulis,
            $penerbit = "penerbit", 
            $harga = 0;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "rar"){ //constructor ini akan menerima judul penulis penerbit harga dari 
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
    } //menggunakan 2 underscore karena constructor magic method
    public function __toString()
    {
        return "{$this->judul}(Rp.{$this->harga})";
    }
    public function getLabel(){  //Method
        return "$this->penulis, $this-> penerbit";
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}(Rp.{$produk->harga})";
        return $str; //setiap function akhiri codenya dengan return agar dapat ditampilkan
    }
}
$produk1 = new Produk("Naruto", "Masahi Kishimoto", " ", "3000");
$produk2 = new Produk("The Last of Us", "Makoto Sayaka", " ", "2000");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
// echo $infoProduk1->($produk1);