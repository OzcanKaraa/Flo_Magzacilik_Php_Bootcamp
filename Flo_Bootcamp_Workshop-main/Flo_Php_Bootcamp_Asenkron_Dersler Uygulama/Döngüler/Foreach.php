<?php
/*Foreach döngüsü ; Php deki dizileri parçalamak için kullanılır.

Genellıkle dizi degişkenlerinin parçalanmasını kullanılan döngü.

Foreach Yapısı :
foreach parantezin içerisine dizi değişkeninin ismi yazılır as ile kısayol tanımlanır.
Kısayol çıktı verir.

*/

$mevsimler = array("İlkbahar","Sonbahar","Yaz","Kış");
foreach ($mevsimler as $mevsim){
    echo "$mevsim <br>";
}