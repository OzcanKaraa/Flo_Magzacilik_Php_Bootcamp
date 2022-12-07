<?php require_once 'header.php';

 $ilanlar=$baglan->prepare("SELECT * from ilanlar where ilan_id=?");
  $ilanlar->execute(array($_GET['id']));

$ilanlargetir=$ilanlar->fetch(PDO::FETCH_ASSOC);

$katid=$ilanlargetir['altkategori_id'];
$ustkatid=$ilanlargetir['kategori_id'];
 ?>

<br><br><br>

  <!-- Content -->
  <div class="container">
    <div class="row margin-bottom-50">
      <div class="col-md-12">
        <!-- Slider -->
        <div class="property-slider default">
          <?php
          $cokluresim=$baglan->prepare("SELECT * from cokluresim where ilan_id=?");
          $cokluresim->execute(array($_GET['id']));

          while ($cokluresimgetir=$cokluresim->fetch(PDO::FETCH_ASSOC)) { ?>
			<a href="Admin/resimler/cokluresim/<?php echo $cokluresimgetir['resim'] ?>" data-background-image="Admin/resimler/cokluresim/<?php echo $cokluresimgetir['resim'] ?>" class="item mfp-gallery"></a>
    <?php } ?>
		</div>
        <!-- Slider Thumbs -->
        <div class="property-slider-nav">
          <?php
          $cokluresim=$baglan->prepare("SELECT * from cokluresim where ilan_id=?");
          $cokluresim->execute(array($_GET['id']));

          while ($cokluresimgetir=$cokluresim->fetch(PDO::FETCH_ASSOC)) { ?>
          <div  class="item"><img style="height:150px" src="Admin/resimler/cokluresim/<?php echo $cokluresimgetir['resim'] ?>" alt=""></div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <!-- Property Description -->
      <div class="col-lg-8 col-md-7">
      <!-- Titlebar -->
	    <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-0">
		  <div class="property-title">
		    <div class="property-pricing"><?php echo $ilanlargetir['ilan_fiyat'] ?>₺</div>
			<h2><?php echo $ilanlargetir['ilan_baslik'] ?> <span class="property-badge-sale">For Sale</span></h2>
			<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> <?php echo $ilanlargetir['ilan_adres'] ?></span>

		  </div>
	    </div>

        <div class="property-description">
          <!-- Description -->
          <div style="background-color:black" class="utf-desc-headline-item">
			<h3><i class="icon-material-outline-description"></i> İlan Açıklama</h3>
		  </div>
          <div class="show-more">
        <?php echo $ilanlargetir['ilan_aciklama'] ?>
            <a href="#" class="show-more-button">Daha Fazla Göster <i class="sl sl-icon-plus"></i></a>
		  </div>

          <!-- Details -->
		  <div style="background-color:black" class="utf-desc-headline-item">
			<h3><i class="sl sl-icon-briefcase"></i> İlan Özellikler</h3>
		  </div>


  <style media="screen">
    .siyah{
      color:black !important
    }
  </style>
          <ul class="property-features margin-top-0">
            <li>İlan Numara: <span class="siyah"><?php echo $ilanlargetir['ilan_id'] ?></span></li>
          </ul><br>


        </div>
      </div>
      <div class="col-lg-4 col-md-5">
        <div class="sidebar">







			<!-- Widget -->
		  <div class="widget utf-sidebar-widget-item">
		    <div class="utf-boxed-list-headline-item">
			  <h3>Benzer İlanlar</h3>
		    </div>
            <div class="utf-listing-carousel-item outer">
              <!-- Item -->

              <?php
              $ilanlar=$baglan->prepare("SELECT * from ilanlar where altkategori_id=?");
              $ilanlar->execute(array( $katid));

              while ($ilanlargetir=$ilanlar->fetch(PDO::FETCH_ASSOC)) { ?>
              <div class="item">
                <div class="utf-listing-item compact">
            <a href="ilandetay-<?php echo ($ilanlargetir['ilan_baslik']).'-'.$ilanlargetir['ilan_id'] ?>" class="utf-smt-listing-img-container">
            <div class="utf-listing-badges-item"> <span class="featured">
              <?php if ($ustkatid=="4"){ echo "Kiralık"; }elseif ($ustkatid=="1") {echo "Satılık";   } ?>
            </span> <span class="for-sale"><?php echo $ilanlargetir['ilan_fiyat'] ?>₺</span> </div>
            <div class="utf-listing-img-content-item">
             <span class="utf-listing-compact-title-item"><?php echo $ilanlargetir['ilan_baslik'] ?></i></span>
            </div>
            <img src="Admin/resimler/ilanlar/<?php echo $ilanlargetir['ilan_resim'] ?>" alt="">
            <ul class="listing-hidden-content">
<!--  					  <li><i class="fa fa-bed"></i>Model<span>--><?php //echo $ilanlargetir['ilan_model'] ?><!--</span></li>-->
<!--  					  <li><i class="icon-feather-codepen"></i> <span>--><?php //echo $ilanlargetir['ilan_metrekare'] ?><!--</span></li>-->
<!--  					  <li><i class="fa fa-arrows-alt"></i>Aidat <span>--><?php //echo $ilanlargetir['ilan_aidat'] ?><!--₺</span></li>-->
  				  </ul>
            </a>
            </div>
              </div>
           <?php } ?>
            </div>
          </div>
          <!-- Widget / End -->
        </div>
      </div>
      <!-- Sidebar / End -->
    </div>
  </div>
<?php require_once 'footer.php'; ?>
