<?php

$user="root";
$pass="";
try {
    $baglan = new PDO('mysql:host=localhost;dbname=car_rental', $user, $pass);
#echo "bağlantı başarılı";

} catch (PDOException $e) {
    echo "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>
