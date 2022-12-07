<?php
//geçmiş ve geleceğer ait zaman tarih bilgiine ulaşmak için

//GetDate() Tıme  fonksıyonu
$dun = getdate(time()-24*60*60);  //24*60*60=86.400 sn 1 gun
//$dun = getdate(time()-24*60*60*5);  // 5 gun geriye gitmek icin
$bugun =getdate(time());
$yarin =getdate(time()+24*60*60);

print_r($bugun["mday"] . "-" . $dun["mon"]."-" . $yarin["year"]);
echo "<hr> <br>";
print_r($dun["mday"] . "-" . $dun["mon"]."-" . $yarin["year"]);
echo "<hr> <br>";
print_r($yarin["mday"] . "-" . $dun["mon"]."-" . $yarin["year"]);