<?php
//Round ile Sayi yuvarlama

class NotHesaplama
{
    public $tesekkur = 70;
    public $takdir = 85;
    public $ortalama;
    public $gecmenotu = 45;

    public function OrtalamaAl($n1, $n2, $n3)
    {
        $this->ortalama = $n1 + $n2 + $n3;
        $this->ortalama = $this->ortalama / 3;
        return round($this->ortalama);
    }

    public function sonuc()
    {
        if ($this->ortalama > $this->gecmenotu) {
            echo "Dersi geçti<br>";
        } else {
            echo "Dersi geçemedin<br>";
        }
    }

    public function Belge($belgeOrtalama)
    {
        if ($belgeOrtalama >= $this->tesekkur && $belgeOrtalama < $this->takdir) {
            echo "Tesekkur Belgesi Aldınız .";
        } elseif ($belgeOrtalama >= $this->takdir) {
            echo "Takdir Aldınız.";
        }
        else{
            echo "Belge Alamıyorsunuz . ";
        }
    }
}
$ortalama = new NotHesaplama();
//$ortalama->OrtalamaAl(30, 5, 80);
//$ortalama->sonuc();

$dersler = array(
    array("Turkce", 100, 45, 40),
    array("Mat", 45, 100, 77),
    array("Fizik", 64, 65, 100),
    array("Biyoloji", 100, 70, 100),
    array("Kimya", 97, 75, 100)
);


//var_dump($dersler);
//echo "<pre>";
//print_r($dersler);
//echo "<pre>";

?>
<table border="1">
    <tr>
        <td>Ders Adı </td>
        <td>Ders Ortalaması </td>
        <td>Ders Durumu </td>
    </tr>
    <?php $belgeOrtalama = 0;
    foreach ($dersler as $ders) {
        $dersOrtalama = $ortalama->OrtalamaAl($ders[1], $ders[2], $ders[3]);
        ?>
        <tr>
            <td><?= $ders[0] ?></td>
            <td><?= $dersOrtalama ?></td>
            <td><?= $ortalama->sonuc(); ?></td>
        </tr>
        <?php
        $belgeOrtalama += $dersOrtalama;
    }
    $belge = $belgeOrtalama/5;
    echo $belge;
    ?>
    <tr>
        <td colspan="3"><?= $ortalama->Belge(round($belge)) ?></td>
    </tr>
</table>