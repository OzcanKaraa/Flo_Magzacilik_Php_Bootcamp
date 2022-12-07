<?php
/*
if (sart){
    ...
}
== esittir
=== denktir
!= esit degil
<> farkllilik ayni olmama

|| veya or
*/

/* if eger kosul ile kullanilir.
else if istenildigi kadar kullanilabilir
else if (kosul) ile kullanilir.
else şartsızdır else degilse demek tek başına kullanılabilir
*/

/*
 * Ayni kosulda if ve else sadece tek bir sefer yazilir.
 * else if istenildigi kadar yazilabilir.
  */


$degisken1 = 80;
if ($degisken1 < 50){
    echo "Degişkenin değeri 50 den küçüktür.";
}
elseif ($degisken1 == 50){
    echo "Degişkenin değeri 50 ye esittir.";
}
else{
    echo "Degişkenin değeri 50 den büyüktür.";
}

echo "<br>";
echo "<hr>";


$degisken2 = 100;
if ($degisken2 < 50 || $degisken2  > 50){
    echo "Degişkenin değeri 100 e esittir.";
}
elseif ($degisken2 > 100){
    echo "Degişkenin değeri 100 den büyüktür.";
}
else{
    echo "Degişkenin değeri 100 den büyüktür.";
}

echo "<br>";
echo "<hr>";

$renk = "Mavi";

if ($renk == "kırmızı"){
    echo "Kırmızı";

}elseif ($renk == "Turuncu"){
    echo "Turuncu";

}elseif ($renk == "Sarı"){
    echo "Sarı";

}elseif ($renk == "Siyah"){
    echo "Siyah";
}
else {
    echo "Renk : $renk";
}


echo "<br>";
echo "<hr>";

$cinsiyet = "Erkek";
$yas = 18 ;

if ($cinsiyet == "Erkek" && $yas >18){
    echo "İçeri Girebilirsiniz";
}elseif ($cinsiyet == "Erkek" && $yas <= 18){
    echo "Yas Kriteri saglanamadi";
}elseif ($cinsiyet != "Erkek" ){
    echo "Sadece erkekler ";
}else{
    echo "Hata Olustu";
}