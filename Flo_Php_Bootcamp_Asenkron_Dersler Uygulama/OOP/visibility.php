<?php
//public her yerden erisilir
//protected  kendi sinifin ve miras sinif icinden erisim
//private  sadece kendi sinifi erisim
class Varlik
{
public $boy;
public $kilo;
public $yas;
public $isim="Kopekler";
public function __construct()  //Database baglantisi oldugunda direk baglanti olur
{
echo "Selam<br>";
}
public function kosmak()
{
echo "Insan Koşar<br>";
}

private function yurumek()
{
echo "Insan yürür<br>";
}

public function uyumak()
{
echo "Insan uyur<br>";
}
public function __destruct() //Sinif bittiginde calisir
{
echo "Bye<br>";
}
}
class Hayvanlar extends Varlik
{
public function yemekyeme(){
//        echo "Yemek yer";
echo  $this->isim. " Yemek yer<br>";
}
public function kosmak()
{
//    $this->yurumek();
echo $this->isim. " Hizli kosar<br>";
}
}
$varlik = new Hayvanlar();
$varlik->yemekyeme();
$varlik->kosmak();
$varlik->uyumak();
echo $varlik->isim;