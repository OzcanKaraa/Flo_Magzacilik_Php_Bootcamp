<?php
//ÇEREZ (COOKİE) VE OTURUM (SESSİON)
//Çerez dosyalar bilgisayarda depolanırken Oturum dosyaları sunuxu bilgisayarda depolanır
//Oturum dosyaları Cerez dosyalarına gore daha guvenlıdır.
//Oturum dosyaları sunucular kapatıldıgında otomatık sılınır.

//Cookie guvenli degildir metin sifrelem ile sifrelenir yasam suresu vardir otomatik olarak silinir.
//set cookie //cookie baslangic
//  setcookie("test" ,"Ozcan Kara",time()+24*60*60,"/kayıtlar","/","ozcankara.com",false,false); //cookie baslangic

// setcookie("isim","deger",time()+3600 , dosya erisme , kayit kullanici adi ,true )  time saniye cinsinden deger verip otomatik silme islemi
//true lisansli  guvenli sayfa


setcookie("adsoyad" ,"Ozcan Kara",time()+3600);
echo "Çerez İçeriği : ".$_COOKIE["adsoyad"];

echo "<hr> <br>";
// isset degiskenin tanimlanip tanimlanmadigini kontrol eder.
// empty ici bos ise true dolu ise false
if (isset($_COOKIE["ziyaretçi"])){
echo   "Çerez dosyası var";

}else{
    echo   "Çerez dosyası yok";
    setcookie("ziyaretçi");
}

echo "<hr> <br>";
setcookie("ziyaretçi","Ad Soyad");
if (empty($_COOKIE["ziyaretçi"])){
    echo   "Çerez içi boş ";
}else{
    echo "Çerez içi dolu";
}

echo "<hr> <br>";

//Cookie Silme icin

setcookie("adsoyad","Ozcan Kara",time()+3600);
echo "Çerez İçi : ".$_COOKIE["adsoyad"];
setcookie("adsoyad","",time()-1); //cookie suresinden once silmek icin

echo "<hr> <br>";


//Cookie metin sifreleme
$adsoyad = sha1(md5("Özcan Kara"));
setcookie("adsoyad",$adsoyad,time()+3600);
echo "Çerez İçi : ".$_COOKIE["adsoyad"];

