<?php
$sayi1 = 20;
$sayi2 = 30;
$islem = "topla";

switch ($islem) {
    case "topla":
        $sonuc = $sayi1 + $sayi2;
        echo "İşlem Sonucu : $sonuc ";
        break;

    case "cikar":
        $sonuc = $sayi1 - $sayi2;
        echo "İşlem Sonucu : $sonuc";
        break;

    default:
        echo "Hatalı İşlem";
        break;
}

echo "<br>";
echo "<hr>";

$sayi3 = 20;
$sayi4 = 30;
$islem = "cikar";

if($islem == "cikar") {
    $sonuc = $sayi3 - $sayi4;
    echo "İşlem Sonucu : $sonuc";
}
else
{
    echo "Hatalı işlem";

}