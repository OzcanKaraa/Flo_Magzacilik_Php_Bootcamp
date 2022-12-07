<?php require_once 'header.php';
require_once 'sidebar.php';

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <center>
                        <h1>İlan Sayfası</h1>
                        <center>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">İlan Ekle</h3>
            </div>

            </form>
            <form action="yukle.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">İlan Resim</label>
                        <input  name="resim" type="file" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">İlan Başlık </label>
                        <input name="baslik"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen ilan başlık  giriniz.">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">İlan Açıklama</label>
                        <textarea name="aciklama" id="editor1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">İlan sıra</label>
                        <input name="sira"  type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen ilan sıra numarası giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Anahtar Kelime</label>
                        <input name="anahtarkelime"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen anahtar kelime giriniz">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Marka</label>
                        <input name="marka "  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen marka  giriniz.">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input name="model"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen model giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Adres bilgisi</label>
                        <input name="adres"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Lütfen adres bilgisi giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Fiyat</label>
                        <input name="fiyat"  type="number" class="form-control" id="exampleInputPassword1" placeholder="Lütfen fiyat bilgisini giriniz.">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <!-- alt kategori -->
                    <input type="hidden" name="katid" value="<?php echo $_GET['katid'] ?>"><!-- üst kategori -->

                </div>
                <!-- /.card-body -->

                <div style="float:right" class="card-footer">
                    <button name="ilanekle" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once 'footer.php'; ?>
