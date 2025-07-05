<?php

class Produk{
    public $judul ,
    $penulis,
    $penerbit;

    private $harga ;
    protected $diskon = 0;
    public function __construct($judul = "mio mirza",$penulis = "karbit",$penerbit = "fesnuk",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
        

    }
    public function getHarga(){
        
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function cetakInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()}, (RP.{$this->harga}) ";
        return $str;
    }

    public function getLabel(){
        return "$this->penulis , $this->penerbit";
    }
}

class Komik extends Produk{
    public $hal;

    public function cetakInfoProduk(){
        $str = "Komik :" . parent::cetakInfoProduk() ." - {$this->hal} halaman.";
        return $str;
    }

    public function __construct($judul = "mio mirza",$penulis = "karbit",$penerbit = "fesnuk",$harga = 0,$hal = 0)
    {
        parent::__construct($judul ,$penulis,$penerbit,$harga);
        $this->hal = $hal;  

    }
}

class Game extends Produk{
    public $jam;
    public function __construct($judul = "judul" ,$penulis = "mio mirza",$penerbit = "fesnuk",$harga = 0,$jam = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jam = $jam;
    }
    public function cetakInfoProduk(){
        $str = "Game :". parent::cetakInfoProduk() ." ~ {$this->jam} jam.";
        return $str;
    }
    public function setDiskon($diskon ){
        $this->diskon = $diskon;
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

$produk1 = new Komik("Naruto","Masashi kisimoto","GTV",70000,500);


$produk2 = new Game("Mobile legend","Moontoon","Byte Dance",80000,10000);


//Game : Mobile legend | Moontoon , Byte dance , 80000 - 10000 jam
//Komik : Naruto | masashi kisimoto , GTV , 70000 - 500 hal

echo $produk1->cetakInfoProduk();
echo "<br>";
echo $produk2->cetakInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);

echo $produk2->getHarga();
echo "<br>";
echo $produk1->getHarga();