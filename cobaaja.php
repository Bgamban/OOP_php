<?php
class Punch{
    public $variable,
            $let,
            $const = "north";
    public function __construct($variable = "f", $let = "nowhere", $const = "k"){ //kalo nilai default harus pilih salah satu disimpan disini atau diproperty
        $this -> variable = $variable;
        $this -> let = $let;
        $this -> $const = "ranger";
    }
    public function lab(){
        return "$this->variable, $this->let, $this->const";
    }
}
$kick = new Punch("n4", "dk");
echo "Kick : " . $kick->lab();