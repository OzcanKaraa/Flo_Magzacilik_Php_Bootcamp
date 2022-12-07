<br><img src="logo.png" alt="" width="100px"><br>
<h2></h2><br>
<h4>Aramak istediğiniz Araba Modeli</h4><br>
<form action="index.php?sayfa=4" method="post">
    <select name="" id="kangrubu">
        <?php
        $sorgu = $baglan->prepare("select * from  ");
        $sorgu->execute();

        foreach ($sorgu as $satir) {
            echo "<option class='option' value='$satir[marka]$satir[marka]'>$satir[model]</option>";
        }
        $sorgu->closeCursor(); unset($sorgu);
        ?>
    </select>
    <button>Arama Yap</button>
</form>