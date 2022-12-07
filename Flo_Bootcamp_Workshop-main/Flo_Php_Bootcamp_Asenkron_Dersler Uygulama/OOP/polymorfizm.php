<?php

class Selam
{
    public function merhaba($isim)
    {
        echo "Merhaba" . $isim . "<br>";
    }

//    public function gulegule($isim)
//    {
//        echo "gulegule" . $isim . "<br>";
//    }
}

class Almanca extends Selam
{
    public function merhaba($isim)
    {
        echo "Halo" .$isim . "<br>";
    }
}

class Ingilizce extends Selam
{
    public function merhaba($isim)
    {
        echo "Hello" .$isim . "<br>";
    }
}

class Fransızca extends Selam
{
    public function merhaba($isim)
    {
        echo "Halo" .$isim . "<br>";
    }
}
$turkce = new Selam();
$turkce->merhaba("Ozcan");

$almanca = new Selam();
$almanca->merhaba("Ozcan");

$ingilizce = new Selam();
$ingilizce -> merhaba("Ozcann");

$fransızca = new Selam();
$fransızca->merhaba("Ozcann");