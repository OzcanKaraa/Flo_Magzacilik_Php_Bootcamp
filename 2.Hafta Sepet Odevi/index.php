<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3 style="text-align:center">ÜRÜN SATIN AL</h3>
  <?php
      $urunler = array(
         array("id" => "1", "urun" => "Sütlü Çikolatalı Gofret ", "fiyat" => "10"),
         array("id" => "2", "urun" => "Kakaolu Fındık Kremalı Rulo Gofret", "fiyat" => "10"),
         array("id" => "3", "urun" => "Gofnut 33 gr Fındıklı Sütlü Çikolatalı Gofret", "fiyat" => "13"),
         array("id" => "4", "urun" => "Tam Bi Çıtır 80 gr Kakao Kremalı Gofret", "fiyat" => "15"),
         array("id" => "5", "urun" => "9 Kat Tat Rulokat Fındıklı Rulo Gofret ", "fiyat" => "12"),
         array("id" => "6", "urun" => "Eti Karam Gurme Bitter Çikolatalı Gofret ", "fiyat" => "13"),
         array("id" => "7", "urun" => "Nestlé Classic Sütlü Çikolatalı Çıtır Gofret", "fiyat" => "15"),
         array("id" => "8", "urun" => "9 Kat Tat Muzlu Gofret", "fiyat" => "50")
      );

      echo "<table width='100%' border='1'>
      <tr>
         <td width='60%'>Ürünler</td>
         <td width='20%'>Fiyat</td>
         <td width='20%'>Adet</td>
      </tr>";

      foreach ($urunler as $urun) {
         echo "<tr>
         <td>$urun[urun]</td>
         <td>$urun[fiyat] ₺</td>
         <td>
            <form action='islem.php?hareket=ekle' method='post'>
               <input type='text' name='adet' required>
               <input type='hidden' name='urun' value='$urun[id]'>
               <input type='submit' value='Ekle'>
            </form>
         </td>
         </tr>";
      }

      echo "</table>";

      $sepetsay = count($_SESSION["sepet"]);

      echo "<br><br><h3 style='text-align:center'>SEPET İÇERİĞİ ($sepetsay)</h3>";

      if ($sepetsay > 0) {
         echo "<table width='100%' border='1'>
         <tr>
            <td width='45%'>Ürünler</td>
            <td width='15%'>Fiyat</td>
            <td width='15%'>Adet</td>
            <td width='15%'>Toplam</td>
            <td width='10%'>Sil</td>
         </tr>";
   
         $sepettoplam = 0;
   
         foreach ($_SESSION["sepet"] as $urunno => $urunadet) {
            $urunsira = array_search($urunno, array_column($urunler, 'id'));
            $urunad = $urunler[$urunsira]["urun"];
            $urunfiyat = $urunler[$urunsira]["fiyat"];
            $uruntoplam = $urunadet * $urunfiyat;
            $sepettoplam += $uruntoplam;
   
            echo "<tr>
            <td>$urunad</td>
            <td>$urunfiyat ₺</td>
            <td>$urunadet</td>
            <td>$uruntoplam ₺</td>
            <td><a href='islem.php?hareket=sil&urunno=$urunid' onclick=\"if (!confirm('Ürünü Silmek İstediğinize Emin misiniz?')) return false;\">Sil</a></td>
            </tr>";
         }
   
         echo "</table>
         <p style='text-align:right'>
            <a href='islem.php?hareket=bosalt' onclick=\"if (!confirm('Sepetteki Tüm Ürünleri Silmek İstediğinize Emin misiniz?')) return false;\">Sepeti Boşalt</a>
         </p>
         <h4 style='text-align:right'>Sepet Toplamı: $sepettoplam ₺</h4>";
      } else {
         echo "<h5 style='text-align:center'>SEPET İÇERİĞİ BOŞ!</h5>";
      }

      
  ?>

</body>
</html>