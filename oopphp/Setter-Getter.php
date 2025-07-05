<?php

class Produk{
    private $judul ,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

    

    public function __construct($judul = "mio mirza",$penulis = "karbit",$penerbit = "fesnuk",$harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
        

    }
    
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul($judul){
        
        $this->judul = $judul;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }
    public function getHargaNormal(){
        return $this->harga;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setDiskon($diskon ){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->harga * $this->diskon / 100;
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
$produk3 = new Produk("babayo");

//Game : Mobile legend | Moontoon , Byte dance , 80000 - 10000 jam
//Komik : Naruto | masashi kisimoto , GTV , 70000 - 500 hal

echo $produk1->cetakInfoProduk();
echo "<br>";
echo $produk2->cetakInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo "diskon game seharga:{$produk2->getHargaNormal()} - {$produk2->getDiskon()}";
echo "<br>";
echo $produk2->getHarga();
echo "<br>";
echo $produk1->getHarga();
echo "<hr>";

$produk1->setJudul("sabutsa");
$produk1->setPenulis("karbit");
echo $produk1->getJudul();
echo $produk1->getPenulis();