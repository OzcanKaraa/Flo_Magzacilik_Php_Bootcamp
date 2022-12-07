<?php
// Bugünün Tarihi yil saast
$bugun =getdate();
print_r($bugun);

echo "<hr> <br>";

// Bugun  Hangi gün
echo $bugun ["weekday"];

echo "<hr> <br>";

// Bugun  Hangi yıl
echo $bugun ["year"];

echo "<hr> <br>";

//Gun/Ay/Tarih
echo "Bugün : " .date("d-m-Y");

echo "<hr> <br>";

//Son iki basamak yilda
echo "Bugün : " .date("d-m-y");

echo "<hr> <br>";
// Gun/Ay/Yil  Saat/Dakika/Saniye
echo "Bugün : " .date("d-m-Y H:i:s ");

echo "<hr> <br>";

echo "Bugün Yılın " .date("z") .".günüdür.<br>";//Yilin kaçıncı gününü verir.
echo "Bugün Yılın " .date("W") .".haftasıdır.<br>";//Yilin kaçıncı haftası verir.
echo "Bugün Yılın " .date("t") ." gün çekmektedir.<br>"; //Ayın kaç gün çekmektedir.