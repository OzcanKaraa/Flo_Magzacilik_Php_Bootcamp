<?php
/*
 * Diziler : Çok Sayıda değişkenin birleşerek olusturdugu daha büyük değişken yapısıdır.
 * Diziler Tek Boyutlu ve Çok Boyutlu diziler olarak 2 ye ayrılır.
 * Tek Boyutlu dizilerde : Dizi değişkenler oluşturulurken Array fonksiyonu kullanılır.Degerler virgül karakteri ile ayrılır.
 * indis degerleri 0 dan baslar.
 * Tek boyutlu dizilerde veriler indis değerine göre ilişkilendirilir.
 */


//TEK BOYUTLU DIZILER KULLANIMI
//$ogrenciler = array(4,6,8,9,"Ali","Sena");

//$ogrenciler = array();
//$ogrenciler[] =45;
//$ogrenciler[] ="Ali";


$ogrenciler = array(4, 6, 8, 9, "Ali", "Sena");
echo $ogrenciler[4];

echo "<br>";
echo "<hr>";

$ogrencilerr = array(4, 6, 8, 9, "Ali", "Sena");
foreach ($ogrencilerr as $ogrencii) {
    echo "$ogrencii - ";
}

echo "<br>";
echo "<hr>";


/* ÇOK BOYUTLU DIZILER KULLANIMI
Çok boyutlu diziler birden fazla anahtar ve değişken içeren dizilerdir.
Bazı durumlarda bir dizi değişkeni içerisinde yeni bir değere de ihtiyaç duyulabilir.
Çok boyutlu dizilerde indis değerlerinden farklı olarak  anahtar ve veri eşitlemeleri de yapılmaktadır.
Tüm değerler tek bir dizi değişkenin içerisine depolanabilir.
Özel olarak ayarlanacak olan anahtarlar metın veya tam sayı türünde olabilir anahtar ile veri arasında => işaretleri kullanılır.
*/

//Çok Boyutlu Dizilerde 1.Tanımlama Yöntemi
$ogrenciler = array();
$ogrenciler[0] = array("adsoyad" => "Özcan Kara ", "not" => "60");
$ogrenciler[1] = array("adsoyad" => "Berfin ", "not" => "70");
$ogrenciler[2] = array("adsoyad" => "Batuhan   ", "not" => "80");

//Çok Boyutlu dizilerde verdıgımız anahtarların aynı olması gerekir.Anahtarlarla eslesecek degerler farklı olabılır..
//Tek boyutlu dizilerde doğrudan dizinin içerisine eleman yerleştirirken  ornek $ogrenciler[] ="Ali";
//Çok boyutlu dizilerde dizi içerisine başka dizi yerleştirilir. // $ogrenciler[0] = array("adsoyad" => "Özcan Kara" , "not" => "60");

echo "<br>";
echo "<hr>";

//Çok Boyutlu Dizilerde 2.Tanımlama Yöntemi
$ogrenciler = array(
         array("adsoyad" => "Özcan Kara ", "not" => "60"),
         array("adsoyad" => "Berfin ", "not" => "70"),
         array("adsoyad" => "Batuhan   ", "not" => "80")
         );


//Çok Boyutlu Dizilerde 3.Tanımlama Yöntemi

$ogrenciler = array();
$ogrenciler[0]["adsoyad"] = "Özcan";
$ogrenciler[0]["not"] = "60";

$ogrenciler[1]["adsoyad"] = "Mehmet";
$ogrenciler[1]["not"] = "70";

$ogrenciler[2]["adsoyad"] = "Ali";
$ogrenciler[2]["not"] = "80";


//Tek boyutlu dızılerde yazdırmak ıcın sadece indis degeri yazilir
//echo $ogrenciler[0];

//Çok boyutlu dızılerde yazdırmak ıcın indis degeri ve anahtar yazdirilir
echo $ogrenciler[0] ["adsoyad"];
echo " - ";
echo $ogrenciler[0] ["not"];

echo "<br><br>";
echo $ogrenciler[1] ["adsoyad"];
echo " - ";
echo $ogrenciler[1] ["not"];

echo "<br><br>";
echo $ogrenciler[2] ["adsoyad"];
echo " - ";
echo $ogrenciler[2] ["not"];


//Çok Boyutlu dizileri tüm elemanarı yazdırmak için Foreach döngüsü kullanılır.

echo "<br>";
echo "<hr>";

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci["adsoyad"]."-".$ogrenci["not"];
    echo "<br><br>";
}
