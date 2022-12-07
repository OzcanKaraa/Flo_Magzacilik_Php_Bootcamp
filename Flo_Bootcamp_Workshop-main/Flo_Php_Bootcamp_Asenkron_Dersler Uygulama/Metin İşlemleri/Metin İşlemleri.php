<?php
// Metin İşleme Fonksiyonları
//STRLEN() KARAKTER SAYISINI OGRENME
// Türkçe karakteri ile 2 karakter sayar.
$metin  = "Özcan Kara";
//echo strlen($metin);
//echo mb_strlen($metin,"utf-8"); //Türkçe karakteri çıkarır

//basta veya sonda boslukları kaldırmak için ltrim
echo strlen(ltrim($metin)); //sol bosluk kaldirmak icin
echo "<hr> <br>";
echo strlen(rtrim($metin)); //sag bosluk kaldirmak icin
echo "<hr> <br>";
echo strlen(trim($metin)); //sol bosluk kaldirmak icin
//hem basta  sonda boslukları kaldırmak için  trim
echo "<hr> <br>";
echo substr($metin,5,4);
echo "<hr> <br>";
echo substr($metin,1,-4); //sondan 4 karakter Al
echo "<hr> <br>";
echo substr($metin,0,-4); //sondan 4 karakter sil
echo "<hr> <br>";
echo substr($metin,-5,2); //sondan 4. karakterden 2 karakter Al
echo "<hr> <br>";
echo "<hr> <br>";
echo strtolower($metin);
echo "<hr> <br>";
echo strtoupper($metin);
echo "<hr> <br>";
echo ucfirst($metin);
echo "<hr> <br>";
echo lcfirst($metin);
echo "<hr> <br>";
echo ucwords($metin);


