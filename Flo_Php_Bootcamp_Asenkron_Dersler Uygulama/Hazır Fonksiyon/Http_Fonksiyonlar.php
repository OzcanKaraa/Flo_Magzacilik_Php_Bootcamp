<?php
// HAZIR FONKSIYONLAR (HTTP BASLIK HEADER , ZAMAN , MATEMATIK , SIFRELEME )


// Sayfa içerisinde kullanılacak Türkçe karakteri destekler.

header("Content-Type:text/html; Charset=UTF-8");

//Ön Bellek : Tarayicilar kullanicilarin ziyaret web sayfalarini sonradan tekrar ziyaret edildiginde daha hizli açabilmeek için
// arka planda kullancıcıların kendı bilgisayarına kayıt edilmesi.

//Header fonksıyonu ile ön belleği temizlenebilir.
header("Cache-Control:no-cache , must-ravalidate"); //Önbellek Tanımlanması
header("Exprise:Sun,12 May 2000 00:00:00 GMT"); //Geçmiş tarih tanımlanması
 header("Location : https://git-scm.com/book/en/v2");//Yönlendirme
header ("Refresh : 10; Url=https://git-scm.com "); //10 saniye yönlendirme
die("10 saniye sonra yönlendiriliyorsunuz ... "); // Yönlendirme mesajı