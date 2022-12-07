<?php require_once 'header.php'; ?>
<br>
  <!-- Main Search Container -->
    <div style="background-color:red !important" class="utf-main-search-container-area inner-map-search-block inner-search-item">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="utf-main-search-form-item">
              <!-- Type -->
              <div class="utf-search-type-block-area margin-top-35">
				<div class="search-type">
				  <label class="active">
					<input class="first-tab" name="tab" checked="checked" type="radio">KİRALIK ARAÇLAR</label>

				</div>
			  </div>






  <!-- Content -->
  <div class="container">
    <div class="row sticky-wrapper">
        <!-- Sorting -->
        <div class="utf-sort-box-aera">
            <div class="sort-by">
              <div class="sort-by-select">
                <form class="" action="listele" method="get">

                <select name="listele" data-placeholder="Default Properties" class="utf-chosen-select-single-item">
                  <option value="1">Artan Fiyat</option>
                  <option value="2">Azalan Fiyat</option>
                  <option value="3">En Yeni İlanlar</option>
                  <option value="4">Eski İlanlar</option>
                </select>
               <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

              </div>
              <button style="height:40px; margin-left:15px" class="button" type="submit" name="listeleme">Listele</button>
</form>
            </div>
        </div>

        <!-- Listings Container -->
        <div class="row">
          <?php
          if (@$_GET['listele']=="1") {
            $ilanlar=$baglan->prepare("SELECT * from ilanlar where altkategori_id=? order by ilan_fiyat ASC");
          }elseif(@$_GET['listele']=="2"){
            $ilanlar=$baglan->prepare("SELECT * from ilanlar where altkategori_id=? order by ilan_fiyat DESC");
          }elseif (@$_GET['listele']=="3") {
            $ilanlar=$baglan->prepare("SELECT * from ilanlar where altkategori_id=? order by ilan_id DESC");
          }elseif (@$_GET['listele']=="4") {
            $ilanlar=$baglan->prepare("SELECT * from ilanlar where altkategori_id=? order by ilan_id DESC");
          }
          $ilanlar->execute(array($_GET['id']));

          while ($ilanlargetir=$ilanlar->fetch(PDO::FETCH_ASSOC)) { ?>

          <div class="col-md-4">
            <div class="utf-listing-item compact">
			  <a href="ilandetay-<?php echo yazilimyolcusu($ilanlargetir['ilan_baslik']).'-'.$ilanlargetir['ilan_id'] ?>" class="utf-smt-listing-img-container">
				  <div class="utf-listing-badges-item"> <span class="featured"></span> <span class="for-sale">For Sale</span> </div>
				  <div class="utf-listing-img-content-item">
					 <span class="utf-listing-compact-title-item"><?php echo $ilanlargetir['ilan_baslik'] ?> <i><?php echo $ilanlargetir['ilan_fiyat'] ?>₺</i></span>
				  </div>
				  <img src="Admin/resimler/ilanlar/<?php echo $ilanlargetir['ilan_resim'] ?>" alt="">
				  <ul class="listing-hidden-content">
					  <li><i class="fa fa-bed"></i> Model <span><?php echo $ilanlargetir['ilan_model'] ?></span></li>
				  </ul>
			  </a>
			</div>
          </div>
<?php } ?>


        </div>


        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="utf-pagination-container margin-top-20">
          <nav class="pagination">
            <ul>
              <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
			  <li><a href="#" class="current-page">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="blank">...</li>
              <li><a href="#">10</a></li>
			  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>
        <!-- Pagination / End -->
      </div>

      <!-- Sidebar -->

      <!-- Sidebar / End -->
    </div>
  </div>
<?php require_once 'footer.php'; ?>
