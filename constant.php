<?php

// define('NAMA', 1234);
// echo NAMA;
// echo "<br>";
// const UMUR = 21;
// echo UMUR;

// class Coba{
//     const NAMA = "Bambang";
// }
// echo Coba::NAMA;

echo __line__;

function coba(){
    return __FUNCTION__;
}
echo coba();

class Coba{
    public $kelas =__CLASS__;
}
$obj = new Coba;
echo $obj->kelas;