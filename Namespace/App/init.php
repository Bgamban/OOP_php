<?php 
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php'; // dan user ini

// require_once 'Service/User.php'; //Namespace adalah solusi ketika nama file sama

spl_autoload_register(function($class){ //berikut adalah Closure fungsi tanpa nama & berada didalam parameter
    // App \ Produk \ User = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . 'Produk/' . $class . '.php';
}); 

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . 'Service/' . $class . '.php';
}); 