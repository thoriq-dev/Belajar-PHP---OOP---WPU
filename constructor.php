<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 5000;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Ini adalah method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// var_dump($produk1);

// $produk1->judul = "Naruto";
// var_dump($produk1);


$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sonny Computer", 250000);

var_dump($produk3);
