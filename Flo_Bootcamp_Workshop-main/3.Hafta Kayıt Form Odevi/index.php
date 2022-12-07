<?php require_once 'baglan.php';


?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="" crossorigin="">
    <title>Veri Tabanı PDO</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="display-3 text-center">Öğrenci Kayıt İşlemi </h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="btn-group">
                    <a href="ekle.php" class="btn btn-outline-primary">Öğrenci Ekle</a>
                </div>
            </div>
        </div>
    </div>

    <br>
</header>
<br>

    <?php

    $students = $db->prepare("SELECT * 
                        FROM student     
                        ");
    $students->execute();



    if (!empty($students)) {
        while ($studentAll = $students->fetch(PDO::FETCH_ASSOC)) {
//            $say++;
            ?>
            <tr>
                <td><?php echo $studentAll['id'] ?></td>
                <td><?php echo $studentAll['adsoyad'] ?></td>
                <td><?php echo $studentAll['tckimlik'] ?></td>
                <td align="center"><a href="guncelle.php?id=<?php echo $studentAll['id'] ?>">
                        <button class="btn btn-outline-success">Güncelle</button></td>
                </a>
                <td align="center"><a href="islem.php?id=<?php echo $studentAll['id'] ?>&delete=ok">
                        <button class="btn btn-outline-danger" onclick="ConfirmDelete()" class="text-light"> Sil
                        </button>
                </td>
            </tr>
        <?php }
    } ?>
</table>

<script type="text/javascript">
    function ConfirmDelete() {
        if (confirm("Silmek istediğinize emin misiniz?"))
            location.href = 'islem.php';
    }
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        ></script>
</body>
</html>