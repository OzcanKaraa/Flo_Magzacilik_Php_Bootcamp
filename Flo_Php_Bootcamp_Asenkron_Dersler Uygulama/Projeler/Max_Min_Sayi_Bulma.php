<?php
//Kullanıcıdan alınan 3 sayıdan En Küçük - En Büyük bulma

$sayi1 = 15 ;
$sayi2 = 100;
$sayi3 = 70 ;

echo "Sayılar : $sayi1 / $sayi2 / $sayi3 <br> " ;

if ($sayi1 >= $sayi2 && $sayi1 >=$sayi3 ){
    echo "En Büyük Sayı :  $sayi1 <br>";
}elseif ($sayi2 >= $sayi1  && $sayi2 >=$sayi3) {
    echo "En Büyük Sayı :  $sayi2 <br>";
}else{
    echo "En Büyük Sayı : $sayi3";
}

echo "<br>";
echo "<hr>";

$sayi4 = 450 ;
$sayi5= - 985;
$sayi6 = 35 ;

echo "Sayılar : $sayi4 / $sayi5 / $sayi6 <br>";
if ($sayi4 <=$sayi5 && $sayi4 <=$sayi6  ) {
    echo "En Küçük Sayı : $sayi4 <br>";
}
elseif ($sayi5 <=$sayi4 && $sayi5<=$sayi6  ) {
    echo "En Küçük Sayı : $sayi5 <br>";
}
else{
    echo "En Küçük Sayı : $sayi6";
}



