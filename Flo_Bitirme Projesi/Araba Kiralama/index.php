<?php require_once 'header.php';

require_once 'slider.php';
?>
<section class="fullwidth" data-background-color="#ffffff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">

                </div>
            </div>
            <div class="col-md-12">
                <div class="carousel">


                    <?php
                    $ilanlar=$baglan->prepare("SELECT * from ilanlar order by ilan_id DESC");
                    $ilanlar->execute();

                    while ($ilanlargetir=$ilanlar->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="utf-carousel-item-area">
                            <div class="utf-listing-item compact">
                                <a href="ilandetay-<?php echo yazilimyolcusu($ilanlargetir['ilan_baslik']).'-'.$ilanlargetir['ilan_id'] ?>" class="utf-smt-listing-img-container">

                                    <div class="utf-listing-img-content-item">
                                        <span class="utf-listing-compact-title-item"><?php echo $ilanlargetir['ilan_baslik'] ?> <i><?php echo $ilanlargetir['ilan_fiyat'] ?>₺</i></span>
                                    </div>
                                    <img src="Admin/resimler/ilanlar/<?php echo $ilanlargetir['ilan_resim'] ?>" alt="">

                                    <li><i class="fa fa-bed"></i> Model<span><?php echo $ilanlargetir['ilan_model'] ?></span></li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
