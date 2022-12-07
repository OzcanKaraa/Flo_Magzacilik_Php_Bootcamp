<?php
// $_GLOBAL $_SERVER  $_REQUEST $_COOKIE $_SESSION $_GET $_POST $_FILES

//$GLOBAL tüm değişkenleri içerisinde bulunduran değişken.
//$GLOBALS [] değişkenleri  dahil ederek kontrol edilir.
function karsilama()
{
    echo "Meraba $adsoyad";
    echo "<br>Merhaba " . $GLOBALS["adsoyad"];

}

$adsoyad = "Özcan Kara";
karsilama();

echo "<hr> <br>";

//Sunucu ile ilgili depoladangı küresel değişken $SERVER ILE uygulamanin calistigi sunucu ile ilgili detayli bilgilere ulasilir.
//dizi ile tutar dizi indislerinde faydalanilir.
// SUNUC ILE ILGILI ISTATISTIK BILGILER ALMA SAKLAMA ISLEMI ICIN

echo "<br> IP  Adresiniz : " . $_SERVER["REMOTE_ADDR"];
echo "<br> Tarayiciniz  :" . $_SERVER["HTTP_USER_AGENT"];
echo "<br> Sunucu Adresi :" . $_SERVER["HTTP_HOST"];
echo "<br> Sunucu IP Adresi :" . $_SERVER["SERVER_ADDR"];
echo "<br> Sunucu  Adı :" . $_SERVER["SERVER_NAME"];
// echo "<br> Sunucu Yazılımı :" . $_SERVER["SERVER_SOFTWARE"];
echo "<br> Sayfa Dizin Adresi : " . $_SERVER["DOCUMENT_ROOT"];


echo "<hr> <br>";

// $_REQUEST
// $_REQUEST : GET POST COOKIE KURESEL DEGISKENLERINI DIZI HALINDE ICERISINDE BARINDIRAN KURESEL DEGISKEN GUVENLIK ACIGI VARDIR.

echo $_REQUEST["adsoyad"];

echo "<hr> <br>";

// $_cookie  çerez dosyalarını cookıe verilerini saklayan değişkendir.
//Çerez dosyaları sayfa ziyaretlerini kaydedilen programcının verileri depolandıgı süresi olan süresi tamamlandıgında otomatık silinir.
setcookie("ziyaretçi","Özcan Kara",time()+360);
echo  "Merhaba ". $_COOKIE["ziyaretçi"];

echo "<hr> <br>";

//  $_SESSION Oturum dosyalari dosyanin sunucusundaki ozel dizinde saklanan programcinin bilgilerini belirledigi ozel dosyalardr.
//Sadece sunucuya erisimi olan kisiler tarafindan erisilebilir.
//Guvenlidir.

session_start();
$_SESSION["ziyaretci"]= "Özcan Kara";
echo "Merhaba ".$_SESSION["ziyaretci"];

//  $_GET  Url ile gonderilir
//  index.php?adsoyad=OzcanKara&yas=22&   url de  get ile gonderim
echo "Merhaba ". $_GET["adsoyad"];

echo "<hr> <br>";

//$_GET sadece form ile ulasilabilir

echo "Merhaba " . $_POST["adsoyad"];
echo "<br><br><br>
<form method='post'enctype='' action='Küresel değişken.php'>
Ad Soyad: <input type =`text` name='adsoyad'>
<input type='submit' value='GONDER'>
tmp_name
</form>
    ";
echo "<hr> <br>";
echo "<hr> <br>";
// $_FILES HTML formlariyla dosya yukleme islemlerinde yuklenecek olan dosyalarin bilgilerin depolandigi degisken
//Html formu araciligiyla yuklenecek olan dosyanin
//Dosya Adi , Dosya Tipi , Dosya Boyutu ,gecici dosya kayit yeri eger varsa hata kodu bilgileri ulasmak icin kullanilir
//$_FILES ILE geriye dönen veriler bir dizi halinde saklanır verilere ulaşmak için dizinin indis değerleri ile
// ad ulasmak icin name indis
// tipine ulasmak type
// gecici ad icin tmp_name indisi
// hata var ise error
// dosya boyutu icin size indisi kullanilir.


print_r($_FILES);

echo "
<form method = `post` enctype='multipart/form-data' action=`Küresel değişken.php`>
Dosya: <input type='file' name='dosya'><br><br>
<input type='submit' value='Yukle'>
</form>
";

echo "<hr> <br>";
echo "<hr> <br>";

