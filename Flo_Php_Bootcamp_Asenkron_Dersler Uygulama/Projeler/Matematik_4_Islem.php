<?php
//FONKSIYONLARLA 4 ISLEM YAPMA

function hesap($sayi1 = 0, $sayi2 = 0, $islem = "")
{
    switch ($islem) {
        case "+":
            $sonuc = $sayi1 + $sayi2;
            break;
        case "-":
            $sonuc = $sayi1 - $sayi2;
            break;
        case "*":
            $sonuc = $sayi1 * $sayi2;
            break;
        case "/":
            $sonuc = $sayi1 / $sayi2;
            break;
        default:
            $sonuc = "Hatalı İşlem";
            break;
    }
    return $sonuc;
}
echo "İşlem Sonucu : " . hesap(10, 6, "*");

echo "<hr> <br>";



