<?php
//return komutu dışarıya değer döndürme için

// return komudu fonksiyonun çağrıldıgı yere gönderilir.

//  Dışarıya Değer Döndüren Fonksiyonlar : Tüm işlemler fonksiyon içerisinde yapılır dışarı sonç gönderildi



function topla($sayi1=0,$sayi2=0){
    $toplam = $sayi1 + $sayi2;
    return $toplam;

}

$sonuc = topla(15,25);
echo "İşlem Sonucu : $sonuc";