<?php
/*
Do ... While Döngüsü : While döngüsüne benzemekle birlikte koşul  kontrolü döngünün sonunda yapılır.
Koşulun sağlanıp sağlanmadıgına bakılmaksızın döngü blok kodlar en az defa çalıştırılır.

*/

$i = 1 ;
do{
    echo "$i - ";
    $i++;

}while($i<=100);

echo "<br>";
echo "<hr>";



//Karsılastırma işleminin döngünün sonunda yapılmasıdır.
$i = 1 ;
do{
    echo "$i - ";
    $i++;

}while($i>100);