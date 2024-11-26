<?php 

class Produk{
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit", 
            $harga = 0;
    public function getLabel(){
        return "$this -> penerbit, $this -> penulis";
    }
}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// $produk1 -> judol = "sad";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "Uncharted";
// $produk2 -> tambah = "null";
// var_dump($produk2); //produk2 menggunakan nilai default yaitu judul

// Anime
$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masashi Kishimoto";
$produk3 -> penerbit = "tvTokyo";
$produk3 -> harga = 3.000;
var_dump($produk3);

// echo "Komik : $produk3 -> penulis, $produk3 -> penerbit";
// echo "<br>";
// echo $produk3 -> getLabel();

// Game
echo "<br>";
$produk4 = new Produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "The Last Of Us";
$produk4 -> penerbit = "Sony Computer";
// $produk4 -> tambahProperty = "hahaha";
$produk4 -> harga = 250.000;

echo "Komik : " . $produk3->getLabel(); // . adalah penggabungan
echo "<br>";
echo "Game : " . $produk4->getLabel();