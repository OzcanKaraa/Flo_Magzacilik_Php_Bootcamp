<?php
include_once "tckimlik.php";


if (@$_POST["kontrol"] != "1") {
    @header("Location:index.php");
}

$adsoyad = $_POST["adsoyad"];
$tckimlik = $_POST["tckimlik"];

$tckontrol = new tckimlik($adsoyad,$tckimlik);
$dogrula = $tckontrol->dogrula();
$kaydet = $tckontrol->kaydet();

if ($dogrula == true){
    echo "DOGRULAMA :Tc Kimlik Doğrulandı";
}else{
    echo "DOGRULAMA : ". $tckontrol->mesaj();
}

if ($kaydet == true){
    echo "<br>KAYIT YAPILDI!";
}else{
    echo "<br>KAYIT : Kayıt Yapılamadı";
}