<?php
// Birlestirme operatoru string deger icin kullanilir (Nokta ile)
//Php de Degiskenlerin taşıdğı değerleri ekrana yazdırmak için Çift Tırnak kullanılır.
//Tek tırnak kullanılırsa tasıgı deger degıl gordugu yazdırılır.

//Aritmetik Islemler
$sayi1 = 10;
$sayi2 = 5;
$ssonuc  = 0;
//$ssonuc  = $sayi1 + $sayi2 ; toplama
//$ssonuc = $sayi1 -$sayi2 ; cikarma
$ssonuc  = $sayi1 * $sayi2 ; //carpma
//$ssonuc  = $sayi1 / $sayi2 ; bolme
//$ssonuc  = $sayi1  % $sayi2 ; //Kalan Mod islemler
echo "Arıtmetık ıslemler ".$ssonuc ;

echo "<br>";
echo "<hr>";


//Atama islemler
$sayi3 = 32;
$sayi4 = 5;
$sonuc  = 0;
//$sonuc = $sayi3; // $sonuc esittir sayi 3 e
//$sonuc .= $sayi4 ; // $sonuc = $sonuc . $sayi4 // Nokta ile Birlestirme islemi gerceklestirir, String deger
//$sonuc += $sayi4 ; // $sonuc = $sonuc + $sayi4
//$sonuc -= $sayi4 ; // $sonuc = $sonuc - $sayi4
//$sonuc *= $sayi4 ; // $sonuc = $sonuc * $sayi4
//$sonuc /= $sayi4 ; // $sonuc = $sonuc / $sayi4
$sonuc   %= $sayi4 ; //$sonuc = $sonuc  % $sayi4
echo "Atama ıslemler ". $sonuc ;

echo "<br>";
echo "<hr>";

//Birlestirme Operatoru
$ad = "Özcan";
$yas = 22;
echo $ad.$yas;//Özcan22
echo "<br>";
echo $ad." ".$yas; // Özcan 22
echo "<br>";
echo "$ad $yas";  //Özcan 22 (Tırnak kullanılarak nokta  ıle bırlestırme yapılamyabılır.)
echo "<br>";
// echo `$ad $yas`; //Tek tirnakta ( $ad $yas )yazdirilir.
echo "<br>";
echo "<hr>";

//Artırma Azaltma Operatoru
// ++ Artırma
// -- Azaltma


// ++ Artirma Kullanimi
$sayi5 = 80 ;
echo $sayi5;
echo "<br>";
$sayi5++;  //$sayi5 += 1 ; -> $sayi5 = $sayi5 + 1 ;
echo $sayi5;

echo "<br>";
echo "<hr>";

// -- Azaltma Kullanimi
$sayi5 = 80 ;
echo $sayi5;
echo "<br>";
$sayi5--;  //$sayi5 -= 1 ; -> $sayi5 = $sayi5 - 1 ;
echo $sayi5;

echo "<br>";
echo "<hr>";

/*Karşılaştırma Operatoru
 == esittir
 === denktir
!= esit degil */


$sayi6 = "50";  //Degeri 50 Veri türü String
($sayi6 == 50); //True
($sayi6 === 50); //False denk degil strıng = integer esit degil


