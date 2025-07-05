<?php

// class contohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo" . self::$angka++ . "kali";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

class contoh{
    public static $angka = 1, $objek;
    
    public function getObjek(){
        
        return self::$objek;
    }
    public function setObjek(){
        self::$objek++;
    }
    public function halo(){
        return  " Halo  ". self::$angka++ . " kali. <br>";
    }
}

$obj = new contoh();
$obj->setObjek();
echo "objek ke: " . $obj->getObjek() . $obj->halo();
echo "objek ke: " . $obj->getObjek() . $obj->halo();
echo  $obj->halo();
$obj2 = new contoh();
$obj2->setObjek(); 


echo "<hr>";
echo   "objek ke: " . $obj2->getObjek() .$obj2->halo();
echo  $obj2->halo();
echo  $obj2->halo();