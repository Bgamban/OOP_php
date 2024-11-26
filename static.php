<!-- THIS AKAN BERLAKU UNTUK OBJEK YANG TELAH KITA INSTANSIASI -->
<?php

// class ContohStatic{
//     public static $angka = 1;
//     public static function halo(){
//         return "Halo!" . self::$angka++. "kali.";
//     }
// }
// echo ContohStatic::$angka; //karena disini terdapat keyword static maka inilah cara efisiennya
// echo ContohStatic::halo(); //jika method wajib +kan kurung buka & tutup
// echo"<hr>";
// echo ContohStatic::halo();

class Contoh{
    public $angka = 1;
    public function halo(){
        return "Halo!!!" . self::$angka++ . "kali.";
        return "Halo!!!" . $this->angka++ . "kali.";
    }
}
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();