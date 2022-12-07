<?php
class Insan
{
    public $boy;
    public $kilo;
    public $yas;

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

$ali = new Insan();
$ali ->kosmak();
$ali->uyumak();
$ali->yurumek();
