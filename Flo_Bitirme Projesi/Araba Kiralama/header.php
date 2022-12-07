<?php require_once 'Admin/baglan.php';
require_once 'function.php';

$ayar=$baglan->prepare("SELECT * from ayarlar where ayar_id=?");
$ayar->execute(array(0));

$ayargetir=$ayar->fetch(PDO::FETCH_ASSOC);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $ayargetir['ayar_baslik'] ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="ozcan">
<meta name="theme-color" content="#e33324">
<meta name="description" content="<?php echo $ayargetir['ayar_aciklama'] ?>">
<meta name="keywords" content="<?php echo $ayargetir['ayar_key'] ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="css/stylesheet.css">

<link href="../../css.css?family=Nunito:300,400,600,700,800&display=swap" rel="stylesheet">
<link href="../../css-1.css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<div id="wrapper">
  <div class="utf-compare-slidebar-area">
    <div class="utf-smt-trigger-item"></div>
    <div class="utf-smt-content">
      <div class="utf-smt-property-item">

        <div class="utf-listing-item compact"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
          <div class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></div>
          <div class="utf-listing-badges-item"><span class="for-sale"></span></div>
          <div class="utf-listing-img-content-item"> <span class="utf-listing-compact-title-item"><i>$420,000</i></span> </div>
          <img src="images/listing-01.jpg" alt=""> </a>
		</div>

        <div class="utf-listing-item compact"> <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
          <div class="utf-remove-compare-item"><i class="icon-line-awesome-close"></i></div>
          <div class="utf-listing-badges-item"><span class="for-sale">For Sale</span></div>
          <div class="utf-listing-img-content-item"> <span class="utf-listing-compact-title-item"> <i>$420,000</i></span> </div>
          <img src="images/listing-02.jpg" alt=""> </a>
		</div>
      </div>
      <div class="utf-smt-buttons"><a href="compare-properties.html" class="button"></a></div>
    </div>
  </div>

  <header style="background-color:black"  id="header-container">

    <div style="background-color:black"  id="header">
      <div class="container">

        <div class="left-side">
          <div  id="logo"> <a href="index.html"><img src="Admin/resimler/<?php echo $ayargetir['ayar_logo'] ?>" alt=""></a> </div>
          <div class="mmenu-trigger">
            <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
          </div>

          <nav id="navigation" class="style-1">
            <ul id="responsive">
              <li><a style="color:white" class="current" href="index.php">Anasayfa</a>

              </li>
              <?php
              $kategori=$baglan->prepare("SELECT * from kategori ");
              $kategori->execute();

              while ($kategorigetir=$kategori->fetch(PDO::FETCH_ASSOC)) {
                ?>
              <li><a style="color:white" href="#"><?php echo $kategorigetir['kategori_baslik'] ?></a>
				<ul>
          <?php
          $katid=$kategorigetir['kategori_id'];
          $altkategori=$baglan->prepare("SELECT * from altkategori where kategori_id=?");
          $altkategori->execute(array($katid));

          while ($altkategorigetir=$altkategori->fetch(PDO::FETCH_ASSOC)) { ?>
				  <li><a href="ilanlar-<?php echo yazilimyolcusu($altkategorigetir['alt_baslik']).'-'.$altkategorigetir['altkat_id'] ?>"><?php echo $altkategorigetir['alt_baslik'] ?></a></li>
        <?php } ?>
				</ul>
			  </li>
      <?php } ?>
         <li><a style="color:white" href="danismanlar.php">Ekibimiz</a></li>
        <li><a style="color:white" href="iletisim.php">İletişim</a></li>
            </ul>
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="right-side">
          <div class="header-widget">

            <a href="iletisim.php" class="button border"><i class="icon-feather-plus-circle"></i> <span>BİZE ULAŞIN</span></a>
		  </div>
        </div>

      </div>
    </div>

  </header>
  <div class="clearfix"></div>
