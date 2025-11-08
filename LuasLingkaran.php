<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {    //pake method tampil
        $rumus = LuasLingkaran::phi * ($this -> jari * $this -> jari);
        echo "lingkaran {$nama} hasilnya adalah : $rumus";
    }

    public static function testing () {
        echo "<br/>";
        echo "ini dari static";     //method static
    }
}

$Lingkaran = new LuasLingkaran();
$Lingkaran -> jari = 7;
$Lingkaran -> tampil('roda');  //pemanggilan method tampil
LuasLingkaran::testing();  //pemanggilan method static

?>