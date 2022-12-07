<?php
//Dizilerı degere gore Küçükten Büyüğe Doğru asort
$notlar = array("Türkçe" => "11"  , "Matematik" => "10","Fizik" => "9");
asort($notlar); //Degere gore Küçükten Büyüğe doğru
print_r($notlar);


echo "<hr><br>";

//Dizilerı degere gore Buyukten Kucuge Doğru arsort
$notlar = array("Türkçe" => "72"  , "Matematik" => "100","Fizik" => "9");
arsort($notlar); //Degere gore Buyukten Kucuge doğru
print_r($notlar);



echo "<hr><br>";


//Dizilerı anahtara gore Küçükten Büyüğe doğru sıralama Ksort A-Z dogru
$notlar = array("Türkçe" => "72"  , "Matematik" => "100","Fizik" => "9");
ksort($notlar); //Anahtara gore Kucukten->Buyuge dogru
print_r($notlar);


echo "<hr><br>";

//Krsort() ile Anahtara  Buyukten ->Kucuge dogru
$notlar = array("Türkçe" => "72"  , "Matematik" => "100","Fizik" => "9");
krsort($notlar); //Anahtara gore Buyukten ->Kucuge
print_r($notlar);


echo "<hr><br>";

//Dizi icerigine Rastegele siralama icin Shuffle()
$notlar = array("Türkçe" => "72"  , "Matematik" => "100","Fizik" => "9");
shuffle($notlar);
print_r($notlar);


echo "<hr><br>";


// Dizinin Eleman Sayisini Bulmak için Count()
// Dizinin Eleman Sayisini Bulmak için sizeof()
//Dizi icerisindeki degerlerin toplami icin array_sum()
//Dizi icerisindeki degerlerin çaarpımları icin array_product()
$sayilar = array(50,90,1,5);
echo    "Toplam Eleman Sayisi :".count($sayilar)  ."<br>";
echo    "Toplam Eleman Sayisi :".sizeof($sayilar)  ."<br>";
echo "Dizinin Toplamını bulmak : ".array_sum($sayilar)."<br>" ;
echo "Dizinin Çarpımları bulmak : ".array_product($sayilar);




