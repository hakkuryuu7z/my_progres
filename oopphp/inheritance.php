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
    public function cetakInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()}, (RP.{$this->harga}) ";
    }

    public function getLabel(){
        return "$this->penulis , $this->penerbit";
    }
}

class Komik extends Produk{
    public function cetakInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()}, (RP.{$this->harga}) - {$this->hal} halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function cetakInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()}, (RP.{$this->harga}) ~ {$this->jam} jam.";
        return $str;
    }
}
// class cetakInfoProduk{
//     public function cetakKomik(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()} , (RP.{$produk->harga}) - {$produk->hal} halaman";
//         return $str;
//     }
//     public function cetakGame(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()}, (RP.{$produk->harga} - {$produk->jam} jam main";
//         return $str;
//     }
// }

$produk1 = new Komik("Naruto","Masashi kisimoto","GTV",70000,500,0);


$produk2 = new Game("Mobile legend","Moontoon","Byte Dance",80000,0,10000);


//Game : Mobile legend | Moontoon , Byte dance , 80000 - 10000 jam
//Komik : Naruto | masashi kisimoto , GTV , 70000 - 500 hal

echo $produk1->cetakInfoProduk();
echo "<br>";
echo $produk2->cetakInfoProduk();
