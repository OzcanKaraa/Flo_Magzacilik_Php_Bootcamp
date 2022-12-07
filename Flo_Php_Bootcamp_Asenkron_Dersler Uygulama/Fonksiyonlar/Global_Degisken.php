<?php
// Global Değişken Dışarıdan tanımlanmıs değişkenlere fonksiyon içerisine ihtiyaç duyulmaktadr.
// Dışarıdan tanımlanmıs degıskenlere ulasabılmeyı sağlamaktadır.
//Global degıskeli fonk parametresız fonksıyonlardır.

function yazdir(){
    global $degisken;
    echo $degisken;
}
$degisken = "Hello World";
yazdir();

echo "<hr> <br>";

function yazdirx($deger=""){
    echo $deger;
}
yazdirx("Hello World");

