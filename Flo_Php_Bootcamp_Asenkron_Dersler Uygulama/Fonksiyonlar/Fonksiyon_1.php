<?php
/*
 *  Fonksiyonlar bir programda belirli işi gerçekleştirmek üzere hazırlanan küçük program parçalarıdır.
 *
 * Echo komutu fonksiyon olup çıktı vermesini sağlar.
 *
 * Gereksiz kod tekrarını engellemek kod karmaşıklığını kaldırmak için programın çalışasını hızlandırmak  ve olası hata ihtimalinde kolay müdahale etme.
 * functıon() komutu kullanılır.
 *
 * fonksiyonlar programlama yapilirken 2 asamda ele alınır.
 * 1)Fonksiyonlarin tanimlanmsi
 * 2) Fonksiyonlarin çağrılması kullanılması
 *
 * Fonksşyonlar bi programın içinde bi sefer tanımlanır istebildiği kadar çaprılabilir ihtiyaç duyuldugu kadar kullanılabılır
 * Fonksıyonlar parametreli ve parametresiz olmak üzere 2 ye ayrılır.
 * Parametresiz fonksiyonlar dışarıdan herhangi bir değer almadan çalışan fonksiyon türleridir.
 * Yaygın olarak temel işlemleri yapmakta kullanılır.
 *
 * Parametreli Fonksiyonlar Dışarıdan değer alan fonksşyonlardır.
 *
 */
function yazdir()
{
    echo "Özcan Kara <br>";
}

 yazdir();
 echo "Normal Yazı <br>";

yazdir();
echo "Normal Yazı2 <br>";

echo "<hr> <br>";

function yazdir2()
{
   for ($i=1;$i<=10;$i++){
       echo "Özcan Kara <br>";
   }
}
yazdir2();
