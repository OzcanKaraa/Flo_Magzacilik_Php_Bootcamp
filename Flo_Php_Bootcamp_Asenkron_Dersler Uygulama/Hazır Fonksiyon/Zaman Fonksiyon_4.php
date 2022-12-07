<?php
/* mktime fonksiyonu - time fonksiyonundan farki ise
time fonksiyonunda ay yil hesaplandiiginda saniye cinsinden hesaplama yapildiginda sorun yasanmaktadir.
mktime fonksiyonunda tarihhler arasinda dolasmak daha kolay
*/

$zaman = mktime(0,0,0,date("m"),date("d"),date("Y")-5); // 5 yil 8 ay öncesi
echo "Tarih : ". date("d-m-Y", $zaman); // Gün-Ay-YIL  Tarih zaman formatlama
