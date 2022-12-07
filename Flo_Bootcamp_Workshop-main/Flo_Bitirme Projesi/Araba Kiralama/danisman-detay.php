<?php require_once 'header.php';

$danisman=$baglan->prepare("SELECT * from danismanlar where danisman_id=?");
$danisman->execute(array($_GET['id']));

$danismangetir=$danisman->fetch(PDO::FETCH_ASSOC);
?>
<br>

  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Agency -->
        <div class="agent agents-profile agency margin-bottom-40"> <a href="agency-profile.html" class="utf-agent-avatar"> <img src="Admin/resimler/<?php echo $danismangetir['danisman_resim'] ?>" alt=""> </a>
          <div class="utf-agent-content">
            <div class="utf-agent-name">
              <h4><a href="agency-profile.html"><?php echo $danismangetir['danisman_isim'] ?></a></h4>
              <p></p>
              <ul class="utf-agent-contact-details">
				  <li style="color:black"><i style="color:black" class="icon-feather-smartphone"></i><?php echo $danismangetir['danisman_telefon'] ?></li>
				  <li style="color:black"><i style="color:black" class="icon-material-outline-email"></i><a style="color:black" href="#"><?php echo $danismangetir['danisman_mail'] ?></a></li>
			  </ul>
			  <ul class="utf-social-icons">
				  <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				  <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				  <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				  <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
				  <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
			  </ul>
			</div>
			<div class="clearfix"></div>
<!--            <p style="color: black">--><?php //echo $danismangetir['danisman_gorev'] ?><!--</p>-->
          </div>
        </div>
	  </div>
    </div>
  </div>

<?php require_once 'footer.php'; ?>
