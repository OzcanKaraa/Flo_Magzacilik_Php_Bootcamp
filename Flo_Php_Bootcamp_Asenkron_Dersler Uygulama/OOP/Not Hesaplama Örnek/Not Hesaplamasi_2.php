<?php

class NotHesaplama
{
    public $ortalama;
    public $gecmenotu = 45;
    public function OrtalamaAl($n1, $n2, $n3)
    {
        $this->ortalama = $n1 + $n2 + $n3;
        $this->ortalama = $this->ortalama / 3;
        echo "Ortalama : ".$this->ortalama ."<br>";
    }
    public function sonuc(){
        if($this->ortalama > $this->gecmenotu){
            echo "Dersi geçti<br>";
        }
        else{
            echo "Dersi geçemedin<br>";
        }
    }
}

$ortalama = new NotHesaplama();
$ortalama->OrtalamaAl(30, 5, 80);
$ortalama->sonuc();