<?php
  session_start();

  $islem = $_GET["hareket"]; // İşlemleri Ayırmak İçin
  $adet = $_POST["adet"]; // Ekleme İşlemi İçin
  $urun = $_POST["urun"]; // Ekleme İşlemi İçin
  $urunno = $_GET["urunid"]; // Silme İşlemi İçin

  if ($islem == "ekle") {
    if ($adet > 0) {
      if (isset($_SESSION["sepet"][$urun])) {
        $_SESSION["sepet"][$urun] += $adet; // Mevcut Ürüne Ekleme Yap
      } else {
        $_SESSION["sepet"][$urun] = $adet; // Tek Ürünü Sepete Ekle
      }
    }
    header("Location:index.php");
  }

  else if ($islem == "sil") {
    if (isset($_SESSION["sepet"][$urunid])) {
      unset($_SESSION["sepet"][$urunid]);
    }
    header("Location:index.php");
  }

  else if ($islem == "bosalt") {
    if (isset($_SESSION["sepet"])) {
      unset($_SESSION["sepet"]);
    }
    header("Location:index.php");
  }
  else {
    header("Location:index.php");
  }
  

?>