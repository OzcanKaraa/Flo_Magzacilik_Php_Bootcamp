<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ağıl Ödevi</title>
</head>
<body style="text-align: center">
<h3>AĞIL HESAPLAMA</h3>
<hr>

<script>
    var agil_sayisi = parseFloat(prompt("Toplam Ağıl Sayısı: "));
    var agil_kapasite = parseFloat(prompt("Ağıl Koyun Kapasite:  "));
    var koyun_sayisi = parseFloat(prompt("Toplam Koyun Sayısı:  "));
    var Artan_Koyun = koyun_sayisi - (agil_kapasite * agil_sayisi);

    document.write("<b>Toplam Ağıl Sayısı : <b>" + agil_sayisi + " <b><br>");
    document.write("<br><b>Ağıl Koyun Kapasite : <b>" + agil_kapasite + " <b><br>");
    document.write("<br><b>Toplam Koyun Sayısı : <b>" + koyun_sayisi + " <b><br>");
    document.write("<br><hr><br><br>");

    var kalan_koyun_sayisi = koyun_sayisi;
    for (i = agil_sayisi; i >= 1; i--) {
        document.write("<div class = `agil`>");
        if (kalan_koyun_sayisi >= agil_kapasite) {
            document.write("<br>" + i + ".Ağıl</b><br>" + agil_kapasite);

        } else {
            if (kalan_koyun_sayisi >= 0) {
                document.write("<b>" + i + ".Ağıl </b><br>" + kalan_koyun_sayisi);
            } else {
                document.write("<b>" + i + ".Ağıl </b><br>0");
            }
        }
        kalan_koyun_sayisi -= agil_kapasite;
        document.write("</div>");
    }
    document.write("<div class='temizle' ></div>");
    if (artan_koyun_sayisi > 0) {
        document.write("<br><hr><br><p><b>" + i + "Artan Koyun Sayısı:<b>" + artan_koyun_sayisi + "adet<p>");
    }

</script>

</body>
</html>