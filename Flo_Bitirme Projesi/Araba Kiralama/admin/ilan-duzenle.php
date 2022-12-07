<?php require_once 'header.php';
require_once 'sidebar.php';

$ilanlar=$baglan->prepare("SELECT * from ilanlar where ilan_id=?");
$ilanlar->execute(array($_GET['id']));

$ilanlargetir=$ilanlar->fetch(PDO::FETCH_ASSOC);
 ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
            <h1>İlan Sayfası</h1>
            <center>
          </div>

        </div>
      </div>
    </section>


    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">İlan Ekle</h3>
        </div>

      </form>
        <form action="yukle.php" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Yüklü Resim</label>
            <img style="width:400px" src="resimler/ilanlar/<?php echo $ilanlargetir['ilan_resim'] ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">İlan Resim</label>
              <input   name="resim" type="file" class="form-control" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">İlan Başlık </label>
              <input value="<?php echo $ilanlargetir['ilan_baslik'] ?> " name="baslik"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen ilan başlık  giriniz.">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">İlan sıra</label>
              <input name="sira" value="<?php echo $ilanlargetir['ilan_sira'] ?>" type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen ilan sıra numarası giriniz.">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Anahtar Kelime</label>
              <input name="anahtarkelime"value=" <?php echo $ilanlargetir['ilan_anahtarkelime'] ?>" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen anahtar kelime giriniz">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Model</label>
              <input name="model"  type="text" value="<?php echo $ilanlargetir['ilan_model'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Lütfen model giriniz.">
            </div>
         <div class="form-group">
         <label for="exampleInputPassword1">Adres bilgisi.</label>
         <input name="adres" value="<?php echo $ilanlargetir['ilan_adres'] ?>"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen adres bilgisi giriniz.">
         </div>

         <div class="form-group">
         <label for="exampleInputPassword1">Fiyat</label>
         <input name="fiyat" value="<?php echo $ilanlargetir['ilan_fiyat'] ?>"  type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen fiyat bilgisini giriniz.">
         </div>
          <div class="form-group">
              <label for="exampleInputPassword1">İlan Açıklama</label>
              <textarea name="aciklama" id="editor1"><?php echo $ilanlargetir['ilan_aciklama'] ?></textarea>
          </div>
         <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <!-- ilan id -->
         <input type="hidden" name="altkatid" value="<?php echo $_GET['altkatid'] ?>">
         <input type="hidden" name="katid" value="<?php echo $_GET['katid'] ?>"><!-- üst kategori -->
         <input type="hidden" name="eskiresim" value="<?php echo $ilanlargetir['ilan_resim'] ?>">


          </div>
          <div style="float:right" class="card-footer">
            <button name="ilanduzenle" type="submit" class="btn btn-primary">Kaydet</button>
          </div>
        </form>
      </div>


    </section>

  </div>

<?php
require_once 'footer.php';
?>
