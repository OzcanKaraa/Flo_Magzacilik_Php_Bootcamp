<?php
//Metin sifreleme  (MD5,SHA1,CRC32, BASE64)

//MD5 Geri dönüştürme fonksiyonu bulunmaz.
//MD5 algorıtması 32 Haneli 16 lı sayı tabanındaki string ifade
$metin = "Özcan Kara";
echo "Md5 ile Şifreleme :".md5($metin)."<br>";

//Sha1 algorıtması  40 haneli 16  lı sayı tabanlı dizi
//Sha1 algorıtması geri dönüştüremez güvenli ve sağlam olacaktır.
// 0-9 a kadar rakamlar A-F harflerın karışımı
echo "Md5 ile Şifreleme :".sha1($metin)."<br>";

echo "<hr> <br>";

echo sha1(md5($metin)); //En guvenli sifreleme

echo "<hr> <br>";

//CRC32 METNIN DURUMUNA GÖRE NEGATIF  POZITIF TAM SAYI ORTAYA CIKAR GERI DÖNDUREMEZ
//CRC 32  Az güvenli şifreleme

echo "CRC32 ile Şifreleme :".crc32($metin)."<br>";

echo "<hr> <br>";

//BASE64 az güvenli çözülmesi kolaydır.Eski haline kolay döndürülebilir.
//BASE64 metin şifrelenmemiş metne göre daha fazla yer kaplar.

echo "BASE64 ile Şifreleme :".base64_encode($metin)."<br>"; //base 64 şfreleme işlemi
echo "BASE64 ile Çözme :".base64_decode(base64_encode($metin))."<br>"; //Şifreyi çözme için

//Güvenliğine göre sıralama  işlemi : MD5 - SHA1 Algorıtması en guvenli > CRC32 > BASE64

