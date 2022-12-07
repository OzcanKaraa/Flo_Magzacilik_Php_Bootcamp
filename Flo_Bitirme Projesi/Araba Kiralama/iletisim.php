<?php
require_once 'header.php';
?>

<br>
      <div class="col-md-4">
        <div style="background-color:black" class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-map"></i>Bilgilerimiz</h3>
        </div>

        <div class="utf-contact-location-info-aera sidebar-textbox margin-bottom-40">
          <ul class="contact-details">
            <li><i class="icon-feather-smartphone"></i> <strong>Telefon Numarası:</strong> <span><?php echo $ayargetir['ayar_telefon'] ?></span></li>
            <li><i class="icon-material-outline-email"></i> <strong>Email Addres:</strong> <span><a href="#"><?php echo $ayargetir['ayar_email'] ?></a></span></li>
			<li><i class="icon-feather-globe"></i> <strong>Website:</strong> <span>www.ozcanrentcar.com</span></li>

          </ul>
        </div>
      </div>
<div class="col-md-8">
    <section id="contact">
        <div style="background-color:black" class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-layers"></i> İletişim Formu</h3>
        </div>
        <div class="utf-contact-form-item">
            <form action="phpmailer.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input name="isim" type="text" placeholder="Ad & Soyad" required="">
                    </div>
                    <div class="col-md-6">
                        <input name="meslek" type="text" placeholder="Meslek" required="">
                    </div>
                    <div class="col-md-6">
                        <input name="email" type="email" placeholder="Email Adres" required="">
                    </div>
                    <div class="col-md-6">
                        <input name="konu" type="text" placeholder="Konu" required="">
                    </div>
                    <div class="col-md-12">
                        <textarea name="mesaj" cols="40" rows="3" placeholder="Mesajınız..." spellcheck="true" required=""></textarea>
                    </div>
                </div>
                <div class="utf-centered-button margin-bottom-10">
                    <button type="submit" class="submit button" id="submit">Gönder</button>
                </div>
            </form>
        </div>
    </section>
</div>


<div class="container">
    <div class="row">
        <div style="background-color:black" class="utf-boxed-list-headline-item">
            <h3><i class="icon-feather-layers"></i> Adres Bilgisi</h3>
        </div>
        <div class="col-md-12">
            <div class="utf-contact-map margin-bottom-50">
                <div class="utf-google-map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.256731107108!2d28.887245115414405!3d41.01963887929967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabae6abebd867%3A0xcaee7bc81385afcd!2zWVTDnCBZxLFsZMSxeiBUZWtub3BhcmsgLSBEYXZ1dHBhxZ9hIEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1670033778527!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"><a href="#" id="streetView">KONUM</a></iframe>
                </div>
            </div>
        </div>

      <!-- Contact Form / End -->
    </div>
  </div>


  <!-- Container / End -->
<?php require_once 'footer.php'; ?>
