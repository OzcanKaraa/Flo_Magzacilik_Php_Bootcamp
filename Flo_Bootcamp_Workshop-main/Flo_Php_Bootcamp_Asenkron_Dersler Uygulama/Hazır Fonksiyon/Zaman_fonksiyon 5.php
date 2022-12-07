<?php
//Rastgele Sayi üretme

echo "Rastgele Sayı : ". rand(); //Rastgele sayı üretme
echo  "<br> <hr>";
echo "Rastgele Sayı : ". mt_rand(10,99); //Iki sayi arasinda rastgele sayi üretme
echo  "<br> <hr>";

// Sayi yuvarlama işlemi

$sayi = 14.8;
echo "Ceil : ".ceil($sayi).  "<br>"; // Ondalıklı sayıları   Üste Yuvarlama.
echo "Floor: ".floor($sayi).  "<br>"; //  Ondalıklı sayıları  Alta  Yuvarlama.
echo "Round : ".round($sayi).  "<br>"; // Ondalıklı sayıları  üste -alta göre yuvarla.
echo "Kırpılmış : ".round($sayi,2).  "<br>"; // Ondalıklı sayıları  üste -alta göre yuvarla.

echo  "<br> <hr>";
$enkucuk = min(10,100,54,655,88,74);
$enbuyuk = max(10,100,54,655,88,74);
echo "En Büyük Sayı : $enbuyuk <br>";
echo "En Küçük Sayı : $enkucuk <br>";

echo  "<br> <hr>";
// abs() ıle mutlak deger hesaplama
$degisken = 4;
echo " Mutlak  Degeri : ". abs($degisken)."<br>"; // mutlak deger hesaplama
echo " Karekok : ". sqrt($degisken)."<br>"; //Karekok alma
echo " Üssü : ". pow($degisken,4)."<br>"; // Üs alma işlemi
echo " 3 ten kalanı : ". fmod($degisken,3)."<br>"; // 3 ten kalan sayı bulma
echo " Logaritma : ". log($degisken)."<br>"; // Logarıtma alma işlemi
echo " 10 luk log : ". log10($degisken)."<br>"; // Logarıtma alma işlemi

