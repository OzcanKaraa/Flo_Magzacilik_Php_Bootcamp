<?php
//class olusturuldugunda cagrilmasi

class Insan
{
    public $boy;
    public $kilo;
    public $yas;
    public $isim="Ali";
public function __construct($isim)  //Databse baglantisi oldugunda direk baglanti olur
{
    echo "Selam ". $isim;
}
    public function kosmak()
    {
        echo "Insan Koşar<br>";
    }

    public function yurumek()
    {
        echo "Insan yürür<br>";
    }

    public function uyumak()
    {
        echo "Insan uyur<br>";
    }
}

$ali = new Insan("Mehmet");

