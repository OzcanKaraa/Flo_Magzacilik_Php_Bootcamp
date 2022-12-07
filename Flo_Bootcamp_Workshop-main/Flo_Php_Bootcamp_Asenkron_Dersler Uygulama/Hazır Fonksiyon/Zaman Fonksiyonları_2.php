<?php
$gun = array("Pazar","Pazaartesi","Salı","Çarşamba","Perşembe ","Cuma","Cumartesi");
$ay = array("Ocak","Şubat","Mart","Nisan","Mayıs ","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
echo "Bugün: ". $gun[date("w")]."<br>";  //w sayi üretecek
echo "Bu Ay: ". $ay[date("n")]."<br>"; //n sayı üretecek
echo "Şimdi: ".date("d") .$ay[date("n")].date("Y") . $gun[date("w")]."<br>";
echo "Zaman : " .date("H:i:s");
