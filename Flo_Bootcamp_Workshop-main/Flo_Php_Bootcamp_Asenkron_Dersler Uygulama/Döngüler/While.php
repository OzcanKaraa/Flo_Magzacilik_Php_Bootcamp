<?php
/*
While döngüsü , For döngüsü ile aynı işleve sahip yazım syntax kısmında farklıdır
For döngüsü ile While Döngüsü arasındaki fark :
For döngüsünde bütün for () parametreler parantez içerisinde yazılırken , while dongusunde parametreler farklı yerlerde kullanılır.

Whıle Dongusu yapısı
1) Önce Degişken tanımlanır
2) While yapısı olusturuldu whıle parantez içerisinde sadece dongunun  koşul yazılır.
3) Sayacin degisim miktari while parantez içerisinde yazıllır
*/

$i = 1 ;
while ($i <= 100 ){
    echo "$i - ";
    $i++;
}

echo "<br>";
echo "<hr>";

$i = 1 ;
while ($i <= 100 ){
    echo " <span style='color: brown'> Özcan Kara </span><br> ";
    $i++;
}