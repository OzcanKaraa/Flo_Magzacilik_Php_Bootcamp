<?php
//abstract dışarıdan erişilmeden
// sadece  miras alindigi nesne uzerinen erisilebilir.
//sadece miras olarak erisilebilir.
abstract class Selam
{
    public function merhaba($isim)
    {
        echo "Merhaba". $isim;
    }

    public function gulegule($isim)
    {
        echo "gulegule". $isim;
    }
}

class Selam2 extends Selam{

}
$selamla = new Selam2();
$selamla->merhaba("Özcan. <br>");
$selamla->gulegule("Görüşürüz ");