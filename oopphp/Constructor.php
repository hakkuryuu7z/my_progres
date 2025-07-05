<?php

class Produk{
    public $judul ,
    $penulis,
    $penerbit,
    $harga;
    
    public function __construct($judul = "mio mirza",$penulis = "karbit",$penerbit = "fesnuk",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->judul,$this->penulis , $this->penerbit, $this->harga";
    }
}


$produk1 = new Produk("Naruto","Masashi kisimoto","GTV",70000);
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "GTV";
// $produk1->harga = 70000;

$produk2 = new Produk("Mobile legend","Moontoon","Byte Dance",80000);
// $produk2->judul = "Mobile legend";
// $produk2->penulis = "Moontoon";
// $produk2->penerbit = "byte dance";
// $produk2->harga = 90000;
$produk3 = new Produk("Dargon ball");


echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
echo "<hr>";
var_dump($produk3);