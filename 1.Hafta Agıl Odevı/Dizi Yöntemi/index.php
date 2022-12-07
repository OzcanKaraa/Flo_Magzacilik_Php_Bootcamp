
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ağıl Ödevi</title>
</head>
<body style="text-align: center">
<h1>Ağıl Hesaplama : </h1>
<hr>
<h3>
<?php
$agil = array(
    "sayi" => 5,
    "kapasite" => 150,
    "toplamkoyun" => 100,

);

$toplamkoyun = $agil["toplamkoyun"];

echo "Toplam Ağıl : ".$agil["sayi"]."<br>";
echo "Toplam Kapasite : ".$agil["kapasite"]*$agil["sayi"]."<br>";
echo "Toplam Koyun: ".$agil["toplamkoyun"]."<br><br>";

for ($i=$agil["sayi"]; $i>=1; $i--){
    if ($toplamkoyun >= $agil["kapasite"]){
        $cikti[]=$i.".Ağıl : ".$agil["kapasite"]." Koyun<br>";
        $toplamkoyun = $toplamkoyun - $agil["kapasite"];
    }
    else{
        $cikti[] = $i.".Ağıl: ".$toplamkoyun." Koyun<br>";
        $toplamkoyun=0;
    }
}


foreach ($cikti as $sonuc){
    echo $sonuc;
}

echo    "<br><br>";

$toplamkapasite = $agil["kapasite"]*$agil["sayi"];
if (($agil["toplamkoyun"]-($toplamkapasite))>0){
    echo "Dışarıda Kalan Koyun Sayısı : ".$agil["toplamkoyun"]-+$toplamkapasite." Koyun";
}else {
    echo "<br><br>";

}

