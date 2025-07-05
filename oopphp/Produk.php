<?php

class Produk{
    public $judul = "miyazaki",
    $penulis = "karbitan",
    $penerbit = "facebuk",
    $harga = 0;
    
    public function getLabel(){
        return "$this->judul,$this->penulis , $this->penerbit, $this->harga";
    }
}

// $produk1 = new Produk();
// $produk1->judul="naruto";
// $produk2 = new Produk();
// var_dump($produk1);
// $produk2->judul = "Mobile legend";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "GTV";
$produk3->harga = 70000;

$produk4 = new Produk();
$produk4->judul = "Mobile legend";
$produk4->penulis = "Moontoon";
$produk4->penerbit = "byte dance";
$produk4->harga = 90000;

echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();