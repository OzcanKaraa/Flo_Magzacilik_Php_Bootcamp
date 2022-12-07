<?php
//$dosya = "isimler.csv";
$isimler = array("Mehmet","Ali","Selin","Zehra");
//touch($dosya);
//fopen($dosya,"wbt");
//foreach ($isimler as $isim) {
//  fwrite($dosya,"$isim;");
//}
//fclose($dosya);

$dosya = fopen("isimler.csv","rbt");
while (!feof($dosya)){
    $satir = fgetcsv($dosya,filesize("isimler.csv"),";");
}
foreach ($satir as $icerik){
    echo "$icerik<br>";
}
fclose($dosya);