<?php

class tckimlik
{
    private $adsoyad;
    private $tckimlik;
    private $ilkkontrol = true;
    private $sonkontrol = false;
    private $hatameaj;
    private $durum;

    public function __construct($adsoyad, $tckimlik)
    {
        $this->adsoyad = $adsoyad;
        $this->tckimlik = $tckimlik;

        $yasaklar = array("11111111110", "22222222220", "33333333330", "44444444440", "55555555550", "66666666660", "77777777770", "88888888880", "99999999990");
        // ilk hane ve son hane  olamaz.

        if (in_array($this->tckimlik, $yasaklar)) {
            $this->ilkkontrol = false;
            $this->hatameaj = "TC Kimlik numarasının ilk 10 hanesi aynı ve son hanesi 0 ile bitiyor.";
        } elseif (strlen($this->tckimlik) != 11) {

            $this->ilkkontrol = false;
            $this->hatameaj = "TC Kimlik numarası 11 haneli degil .";
        } //Tc kimlik numaralarının her hanesi rakamsal değerdir.

        elseif (!ctype_digit($this->tckimlik)) {

            $this->ilkkontrol = false;
            $this->hatameaj = "TC Kimlik numarası rakamlardan oluşmuyor.";
        } //Ilk hane hicbi zaman 0 olamaz.
        elseif ($this->tckimlik[0] == 0) {
            $this->ilkkontrol = false;
            $this->hatameaj = "Tc Kimlik numarası 0 ile basliyor.";
        }
    }


    public function dogrula()
    {
        if ($this->ilkkontrol == false) {
            $this->sonkontrol = false;
        } else {
            //1.3.5.7. ve 9. hanelerin toplamini
            for ($i = 0; $i < 9; $i = $i + 2) {
                $tekler += $this->tckimlik[$i];
            }

            //2.4.6 ve 8. hanelerin toplamini
            for ($j = 1; $j < 9; $j = $j + 2) {
                $ciftler += $this->tckimlik[$j];
            }

            //11.hane haric toplam
            for ($k = 0; $k < 10; $k = $k + 1) {
                $tekcift += $this->tckimlik[$k];
            }

            /* 1. 3. 5. 7. ve 9. hanelerin toplamının 7 ile çarpımından, 2. 4. 6. ve 8. hanelerin toplamı çıkartıldığında
             geriye kalan sayının 10ʹa göre modu 10. haneye eşittir.
            */

            if (($tekler * 7 - $ciftler) % 10 != $this->tckimlik[9]) {
                $this->sonkontrol = false;
                $this->hatameaj = "1. 3. 5. 7. ve 9. hanelerin toplamının 7 ile çarpımından, 2. 4. 6. ve 8. hanelerin toplamı çıkartıldığında geriye kalan sayının 10ʹa göre modu 10. haneye eşit degil";
                //1.2.3.4.5.6.7.8.9.10 hanelerin toplamının 10 a göre modu 11.haneeye eşitir.
            else
                if ($tekcift % 10 != $this->tckimlik[10]) {
                    $this->sonkontrol = false;
                    $this->hatameaj = " 1.2.3.4.5.6.7.8.9.10 hanelerin toplamının 10 a göre modu 11.haneeye  eşit degil.";
                } //TC Kimlik Dogrulandi
                else {
                    $this->sonkontrol = true;
                    $this->hatameaj = "";
                }
            }
            return $this->sonkontrol;
        }
    }

    public function kaydet()
    {
        //Veri Tabanı Baglantısı
        $baglan = new PDO("mysql:host=localhost;dbname=tckimlik;charset=utf8", "ozcan", "1234");
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Kontrol Islemler
        if ($this->sonkontrol == true) {
            $this->durum = "TC Kimlik Geçerli.";

        } else {
            $this->durum = "TC Kimlik Geçersiz.";
        }
        //Kayıt İşlemi
        $sorgu = $baglan->prepare("inser into tckimlik  values(?,?,?,?,?)");
        $sonuc = $sorgu->execute(NULL, $this->adsoyad, $this->tckimlik, $this->durum, $this->hatamesaj);
        $sorgu->closeCursor();
        unset($sorgu);
        if ($sonuc) {
            return true;
        } else {
            return false;
        }
    }

    public function mesaj()
    {
        return $this->hatameaj;
    }
}

