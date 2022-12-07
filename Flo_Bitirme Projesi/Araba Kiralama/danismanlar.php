<?php require_once 'header.php'; ?>


  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="utf-agents-container-area">
            <!-- Agent -->


            <?php
            $danisman=$baglan->prepare("SELECT * from danismanlar ");
            $danisman->execute();

            while ($danismangetir=$danisman->fetch(PDO::FETCH_ASSOC)) { ?>

            <div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="agent">
                <div class="utf-agent-avatar"> <a href="danisman-detay.php?id=<?php echo $danismangetir['danisman_id'] ?>"> <img src="Admin/resimler/<?php echo $danismangetir['danisman_resim'] ?>" alt="Danışmanlar"> <span class="view-profile-btn">Danışman Detayı</span> </a> </div>
                <div class="utf-agent-content">
                  <div class="utf-agent-name">
                    <h4><a href="danisman-detay.php?id=<?php echo $danismangetir['danisman_id'] ?>"><?php echo $danismangetir['danisman_isim'] ?></a></h4>
                    <span><?php echo $danismangetir['danisman_gorev'] ?></span>
				  </div>
                </div>
              </div>
            </div>

          <?php } ?>


            <!-- Agent / End -->
          </div>
          <!-- Agents Container / End -->
        </div>
      </div>
      <div class="col-md-12">
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
<?php require_once 'footer.php'; ?>
