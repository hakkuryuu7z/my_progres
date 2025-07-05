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
        return "$this->penulis , $this->penerbit";
    }
}

class cetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} , (RP.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi kisimoto","GTV",70000);


$produk2 = new Produk("Mobile legend","Moontoon","Byte Dance",80000);

$produk3 = new Produk("Dargon ball");

$infoproduk1 = new cetakInfoProduk();

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
echo "<hr>";
echo "tampil info produk :";
echo $infoproduk1->cetak($produk2);

