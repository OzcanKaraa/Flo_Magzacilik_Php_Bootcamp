<?php
/*
 * Unset Fonksiyonu -> Dizilerden elaman silmek icin
 */

$ogrenciler = array("Ali","Ahmet","Asya","Selim");
unset($ogrenciler[1]);
foreach ($ogrenciler as $ogrenci){
    echo "$ogrenci - ";}

echo "<hr><br>";

//Bırden fazla sılme ıslemı ıcın
$ogrenciler = array("Ali","Ahmet","Asya","Selim");
unset($ogrenciler[1],$ogrenciler[2]);
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}
echo "<hr><br>";

//Dizi içerisindeki tüm elemanları silmek için

$ogrenciler = array("Ali","Ahmet","Asya","Selim");
$ogrenciler = array(); //Dizinin içini tamamen siler.
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}

echo "<hr><br>";

//Dızıdekı elemanları tersıne çevirmek için  array_reverse() fonskiyonu

$ogrenciler = array("Ali","Ahmet","Asya","Selim");
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}

echo "<br><br>";

$ogrenciler2 = array_reverse($ogrenciler);
foreach ($ogrenciler2 as $ogrenci2){echo "$ogrenci2 - ";}

echo "<hr><br>";

//Dizilerin başına veya sonuna veri ekleme çıkarma işlemleri

$ogrenciler = array("Ali","Ahmet","Asya","Selim");
array_unshift($ogrenciler , "Sena"); //Diziye başa eleman ekleme
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}

echo "<hr><br>";
//Bırden fazla dızı basına verı ekleme
$ogrenciler = array("Ali","Ahmet","Asya","Selim");
array_unshift($ogrenciler , "Sena","Erdem"); //Diziye başa eleman ekleme
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}

echo "<hr><br>";

//Dizinin ilk elemanı silmek için Array_shift

$ogrenciler = array("Ali","Ahmet","Asya","Selim");
array_shift($ogrenciler ); //Dizinin ilk elemani silme
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}

echo "<hr><br>";

//Dizi Sonuna eleman ekleme için Array_push()

$ogrenciler = array("Ali","Ahmet","Asya","Selim");
array_push($ogrenciler,"Esra","Kaan"); //Dızının sonuna eleman ekleme
foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}
echo "<hr><br>";


//Dızının en son elemanı silme için array_pop()

$ogrenciler = array("Ali","Ahmet","Asya","Selim");

array_pop($ogrenciler); //Dizinin son elemani silme

foreach ($ogrenciler as $ogrenci){echo "$ogrenci - ";}

echo "<hr><br>";


