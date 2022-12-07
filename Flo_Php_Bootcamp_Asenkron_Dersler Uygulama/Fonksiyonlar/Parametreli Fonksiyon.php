<?php
// Parametreli Fonksiyonlar Dışarıdan değer alan fonksşyonlardır.
//Fonksıyonun parametre sayısı kadar dışarıdan değer gönderme gereklidir.
function yazdir($gelen)
{
    for ($i=1;$i<=$gelen;$i++){
        echo "$i-Özcan Kara <br>";
    }
}
yazdir(20);

echo "<hr> <br>";

function yazdir2($sayi,$isim)
{
    for ($i=1;$i<=$sayi;$i++){
        echo "$i-Özcan Kara <br>";
    }
}
yazdir2(50,"Özcan Kara");

echo "<hr> <br>";


