<?php

require_once 'baglan.php';

if (isset($_POST['insertislemi'])) {


    $kaydet = $db->prepare("INSERT into student set

		adsoyad=:adsoyad,
		tckimlik=:tckimlik
		
		");

    $insert = $kaydet->execute(array(
        'ad' => $_POST['adsoyad'],
        'soyad' => $_POST['tckimlik'],
      
    ));

    if ($insert) {

        Header("Location:index.php?durum=ok");

        exit;

    } else {


        Header("Location:index.php?durum=no");

        exit;
    }
}


if (isset($_POST['updateislemi'])) {

    $id = $_POST['id'];
    $sql = "UPDATE student SET adsoyad=?, tckimlik=? WHERE id=?";
    $update = $db->prepare($sql)->execute([$_POST['adsoyad'], $_POST['tckimlik'], $id]);

    if ($update) {


        Header("Location:index.php");
        exit;

    } else {

        Header("Location:guncelle.php?durum=no&id=$id");
        exit;
    }
}

if ($_GET['delete'] == "ok") {
    $sil = $db->prepare("DELETE from student where id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['id']
    ));
}
if ($deleteislemi) {
    Header("Location:index.php?durum=ok&id=$deleteislemi");
    exit;
} else {

    Header("Location:index.php?durum=no&id=$deleteislemi");
    exit;
}
?>
