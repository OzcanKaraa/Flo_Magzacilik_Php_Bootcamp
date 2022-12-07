<?php
// Öğrenci Notuna Göre Geçti Kaldı Hesaplama

$ogrenciler = array(  //Verileri saklayabilmek için çok boyutlu dizi kullandım
    array("adsoyad"=> "Ali","not1"=> "80","not2"=> "40"),
    array("adsoyad"=> "Ahmet","not1"=> "100","not2"=> "30"),
    array("adsoyad"=> "Selin","not1"=> "15","not2"=> "45"),
    array("adsoyad"=> "Sena","not1"=> "74","not2"=> "10")
);
//Mevcut olan  verileri diziyi foreach döngüsü ile  toplu olarak yazdırmak için kullndım.
foreach ($ogrenciler as $ogrenci) {
    $ortalama = ($ogrenci["not1"] + $ogrenci["not2"]) /2;
    if ($ortalama>=60){
     $sonuc = "Geçti";
    }else
    { $sonuc = "Kaldı";
    }
    echo "Adı Soyadı : ".$ogrenci["adsoyad"]."<br>";
    echo "Not 1  : ".$ogrenci["not1"]."<br>";
    echo "Not 2 : ".$ogrenci["not2"]."<br>";
    echo "Ortalama: $ortalama <br>";
    echo "Sonuç: $sonuc <br>";
    echo "<hr><br>";
}