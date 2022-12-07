<?php
/*
 *
 Döngüler : Php de belirli şartın sağlandıgı sürece aynı işlemlerin tekrarlanmasını sağlayan kod bloklarına Döngüler denir.
Döngüler standart olarak gerekli eleman var;
1) Döngü Değişkeni (Sayaç)
2) Döngülerin Başlangıç Değeri
Döngünün hangi koşulda ilerlediği koşul
3) SayaÇ Artım değeri

FOR DÖNGÜSÜ : Belirlenmiş olan komut veya komutların belirlenmiş olan koşul dahilinde istenildiği sayıda tekar edilmesini sağlayan yapıdır.

FOR YAPISI :

For(sayaç değişken; Koşul oluşturulur; Döngü değişkeninin artım miktarı){
}

*/

//1 den 100 e  kadar 1 er artirma ile  sayilar yazdirma
for ($i=1; $i<=100;$i++){
    echo "$i -";
}


echo "<hr><br>";


// 5 er 5 er artirma icin echo dan sonra
for ($i=1; $i<=100;$i++){
    echo "$i -";
    $i+=4; //$i=$i+4;
}

echo "<br>";
echo "<hr>";

// 5 er 5 er artirma icin echo dan önce
for ($i=1; $i<=100;$i++){
    $i+=4; //$i=$i+4;  // 5 er 5 er artirma
    echo "$i -";
}

echo "<br>";
echo "<hr>";

for ($i=1; $i<=100; $i+=5){
    echo "$i -";
}

