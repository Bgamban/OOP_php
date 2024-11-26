<?php 
class Produk{
    public $judul, 
            $penulis,
            $penerbit,
            $harga;
    public function __construct($judul, $penulis, $penerbit, $harga){ 
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
    } 
    public function __toString()
    {
        return "{$this->judul}{$this->penulis}{$this->penerbit}{$this->harga}";
    }
 
}

$produk3 = new Produk("Naruto ", "Masahi Kishimoto ", "Shonen Jump ", "de");
echo"<br>";
$produk2 = new Produk("Dragon Ball", "Akira Toriyama", "Shueisha", "4000");


echo "<br>";
$produk4 = new Produk("Uncharted", "The Last Of Us", "l", "rwr ");


echo "Komik : " . $produk3;
echo "<br>";
echo "Game : " . $produk4;
"<br>";
var_dump($produk2);