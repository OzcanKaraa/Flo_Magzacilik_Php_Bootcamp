<?php
/*
 * Switch : Bir değişkenin belirli koşullardan hangisinin uygun olduguna bakar ve o koşul için belirlendiği işlemler gerçekleştirir.
 Switch if kontrol yapısının eşitlik karşılaştırılması olarakta isimlendirilebilir.
 */

$renk = "gri";
if ($renk == "siyah") {
    echo "Siyah";
} elseif ($renk == "turuncu") {
    echo "Turuncu";
} elseif ($renk == "kırmızı") {
    echo "Turuncu";
} elseif ($renk == "turuncu") {
    echo "Turuncu";
} else {
    echo "Hiçbiri değil";
}

echo "<br>";
echo "<hr>";

/*
switch ile olusturuldugunda
switch (karsilastirma yapilacck degisken ismi){ case}  kullanimi.
 break; bitti
 default hiçbiri değil anlamına gelir.
switch yapisi if ile esitlik karsilastirmasi ile birebir aynisidir.
switch sadece esitlik karsilastirilabilir.
if ise buyuk küçük farklı olma durumları gibi karşılaştırılabilir.
Aynı zamanda ıf içerisinde birden fazla karşılaştırmayı şartı sunulabilir.Aralarında mantıksal operatorler kullanılarak
ve veya not operatorlerı

swıtchte ıse  sadece tek bir koşul sunulabilir. ornegın  renk siyaha eşit ise
*/

$renk = "gri";
switch ($renk) {
    case "siyah":
        echo "Siyah";
        break;

    case "sarı":
        echo "sarı";
        break;

    case "turuncu":
        echo "turuncu";
        break;

    case "gri":
        echo "gri";
        break;


    default:
        echo "Hiçbiri değil";
        break;
}