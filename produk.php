<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 5000;

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


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;




$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sonny Computer";
$produk4->harga = 250000;


echo "<hr>";
echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();
