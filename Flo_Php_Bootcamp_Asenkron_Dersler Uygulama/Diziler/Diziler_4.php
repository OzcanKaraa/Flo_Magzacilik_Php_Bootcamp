<?php

$ogrenciler1 = array("Ali","Ahmet");
$ogrenciler2 = array("Ayse","Fatma","Selin");

//Dızılerde dızılerı bırlestırıp tek bır dızı olusturmak için array_merge()
$ogrenciler = array_merge($ogrenciler1,$ogrenciler2);
print_r($ogrenciler);

echo "<hr><br>";

// Dizi oluşur karşılaştrılan dizinin farklılıklarını bulur yeni diziye olarak gösterir.  array_diff()
$sayilar1 = array(1,4,5,3);
$sayilar2 = array(2,0,1,3);
$sonuc = array_diff($sayilar1,$sayilar2);
print_r($sonuc);

echo "<hr><br>";

//array_intersect() dizinin ortak elemanları bulmak için.

$sayilar1 = array(1,4,5,3);
$sayilar2 = array(2,0,1,3);
$sonuc = array_intersect($sayilar1,$sayilar2);
print_r($sonuc);

echo "<hr><br>";

// Diziler içerisinde arama yapmak için in_array()

//in_array("Aranacak elaman ismi","Dizi ismi")

$ogrenciler3 = array("Ali","Sevda","Leyla","Ahmet");
if (in_array("Sevda",$ogrenciler3)){
    echo "Bulundu";
}else{
    echo "Bulunamadı ...";
}

echo "<hr><br>";
//İkinci Yol : in_array()

$ogrenciler4 = array("Ali","Sevda","Leyla","Ahmet");
$sonuc = in_array("Ali",$ogrenciler4);
if ($sonuc==true){
    echo "Bulundu";
}else {
    echo "Bulunamadı ...";
}

echo "<hr><br>";

//Tekrar eden elamanlari kaldırır yeni diziye oluşturulur  Array_unique(dizi ismi yazılır)
$ogrenciler5 = array("Ali","Sevda","Leyla","Ahmet","Ali","Sevda","Leyla","Ahmet","Ayse","Fatma","Selin");
$sonuc = array_unique($ogrenciler5);
print_r($sonuc);

echo "<hr><br>";

// Dizi içerisinden rastgele elman seçme işlemi Array_rand()

$ogrenciler6 = array("Ali","Sevda","Leyla","Ahmet");
$sonuc=array_rand($ogrenciler6);
echo    "Sonuç : ".$ogrenciler6[$sonuc];

echo "<hr><br>";

//array_slice() ile diziden istenildigi indisten istenilen eleman alınır yeni dizi oluşturulur.
$ogrenciler7 = array("Ali","Sevda","Leyla","Ahmet","Asya","Ahmet");
$sonuc=array_slice($ogrenciler7,3,3); //indiz 3 ten itibaren 3 eleman alinir.
print_r($sonuc);