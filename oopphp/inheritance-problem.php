<?php

class Produk{
    public $judul ,
    $penulis,
    $penerbit,
    $harga,
    $hal,
    $jam;
    
    public function __construct($judul = "mio mirza",$penulis = "karbit",$penerbit = "fesnuk",$harga = 0,$hal = 0,$jam = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hal = $hal;
        $this->jam = $jam;

    }

    public function getLabel(){
        return "$this->penulis , $this->penerbit";
    }
}

class cetakInfoProduk{
    public function cetakKomik(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} , (RP.{$produk->harga}) - {$produk->hal} halaman";
        return $str;
    }
    public function cetakGame(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (RP.{$produk->harga} - {$produk->jam} jam main";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi kisimoto","GTV",70000,500,0);


$produk2 = new Produk("Mobile legend","Moontoon","Byte Dance",80000,0,10000);

$infoproduk1 = new cetakInfoProduk();


//Game : Mobile legend | Moontoon , Byte dance , 80000 - 10000 jam
//Komik : Naruto | masashi kisimoto , GTV , 70000 - 500 hal

echo "Komik : ".$infoproduk1->cetakKomik($produk1);
echo "<br>";
echo "Game : ".$infoproduk1->cetakGame($produk2);
