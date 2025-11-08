<?php
require_once ('./LuasLingkaran.php');   //panggil file LuasLingkaran.php

use App\Math\LuasLingkaran;   //panggil namespace LuasLingkaran

$Lingkaran = new LuasLingkaran(7); 
$Lingkaran -> tampil('roda');  //pemanggilan method tampil
LuasLingkaran::testing();  //pemanggilan method static