<?php
class Insan
{
    public $boy;
    public $kilo;
    public $yas;
    public $isim="Mehmet";

    public function kosmak()
    {
        echo   $this->isim." Koşar<br>";
    }

    public function yurumek()
    {
        echo $this->isim." yürür<br>";
    }

    public function uyumak()
    {
        echo $this->isim." uyur<br>";
    }
}

$ali = new Insan();
$ali ->kosmak();
$ali->uyumak();
$ali->yurumek();
