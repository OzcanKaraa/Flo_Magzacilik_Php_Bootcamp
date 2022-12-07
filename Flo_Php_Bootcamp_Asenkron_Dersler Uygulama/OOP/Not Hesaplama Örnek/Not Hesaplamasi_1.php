<?php
class NotHesaplama{
    public function OrtalamaAl($n1,$n2,$n3){
    $this->ortalama = $n1+$n2+$n3;
    $this->ortalama = $this->ortalama / 3 ;
    echo $this->ortalama;
    }
}
$ortalama = new NotHesaplama();
$ortalama->OrtalamaAl(30,50,80);