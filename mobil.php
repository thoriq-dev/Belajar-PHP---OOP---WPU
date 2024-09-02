<?php

// Toko -> Produk:
// 1. Komik 
// 2. Game

class Mobil
{
    public $nama, $merk,
        $wanra,
        $kecepatanMaksimal,
        $jumlahPenumpang;

    public function tambahKecepatan() {}
    public function kurangiKecepatan() {}
    public function gantiTransmisi() {}
}
$mobil1 = new Mobil();
var_dump($mobil1);
