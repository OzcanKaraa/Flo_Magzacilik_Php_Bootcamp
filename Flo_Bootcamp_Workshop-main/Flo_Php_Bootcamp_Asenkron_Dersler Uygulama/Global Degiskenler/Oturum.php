<?php

//SESSION
//Tarayicilar kapandiginda oturumlar iptal olur .
session_start(); //oturum baslama
$_SESSION["Kitap"] = "Nutuk";
$_SESSION["yil"] = "2022";

echo "Kitap Adı : " .$_SESSION["Kitap"]."<br>";
echo "Basim Yili : " .$_SESSION["yil"] ;

echo  "<hr> <br>";

if (isset($_SESSION["Kitap"])){

    echo "Oturum Bulundu";
}
if (empty($_SESSION["yil"])){
}
unset($_SESSION["Kitap"],$_SESSION["yil"]); //Oturum silmek için

session_destroy(); //Tüm oturumlar iptal edilir.