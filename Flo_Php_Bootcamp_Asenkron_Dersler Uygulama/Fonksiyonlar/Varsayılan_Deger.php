<?php
//Varsayilan deger ile fonskiyon gonderim eksik hatali deger gonderimini önlemek için.


function yazdir2($sayi=0,$isim="")
{
    for ($i=1;$i<=$sayi;$i++){
        echo "$i-$isim <br>";
    }
}
yazdir2(50,);
echo "<hr> <br>";