<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="php, web sitesi, eticaret, kıyafet">
    <meta name="description" content="ABC firması 1920 yılında İstanbulda kurulmuştur.">
    <meta name="author" content="ABC Yazılım Firması Tarafından Kodlanmıştır.">
    <title>Php Dersleri</title>
</head>

<body>
    <h3>Php Programlama</h3>
    <h4>Sık Kullanılan String Fonksiyonlar</h4>

    <?php

    $yazi = "Aydın Adnan Menderes Üniversitesi";

    echo "<b>\$yazi Değişkeninin İçeriği: </b>" . "$yazi <br> <br>";   // echo $yazi . "<br>";



    //yazi değişkenin içerisindeki değerlerin büyük harfe dönüştürülerek, $byazi değişkeninin içerisine aktarıp ekrana yazdırma işlemi:

    $byazi = strtoupper($yazi);
    echo "<b> \$yazi Değişkenin Büyük Harfe Dönüştürülmesi: </b> $byazi";
    echo "<br>";
    echo "<b> \$yazi Değişkenin Büyük Harfe Dönüştürülmesi: </b>" . $byazi = mb_strtoupper($yazi);
    echo "<br><br>";



    //byazi değişkeninin içindeki değer küçük harfe dönüştürülerek, $kyazi değişkeninin içerisine aktarıp ekrana yazılması işlemi:

    echo "<b> \$byazi Değişkeninin Küçük Harfe Dönüştürülmesi: </b>" . $kyazi = strtolower($byazi);
    echo "<br>";
    echo "<b> \$byazi Değişkeninin Küçük Harfe Dönüştürülmesi: </b>" . $kyazi = mb_strtolower($byazi);
    echo "<br><br>";



    //$kyazi değişkenin içindeki değerin sadece ilk kelimenin ilk harfini büyütülerek $ilkyazi değişkeninin içerisine aktarıp ekrana yazılması işlemi:

    echo "<b> \$kyazi Değişkeninin İlk Karakterinin Büyütülmesi: </b>" . $ilkyazi = ucfirst($kyazi);
    echo "<br><br>";



    //$kyazi değişkenin içindeki kelimelerin ilk harflerini büyüterek ekrana yazılması işlemi:

    echo "<b> \$kyazi Değişkeninin Kelimelerindeki İlk Karakterinin Büyütülmesi: </b>" . ucwords($kyazi);
    echo "<br><br>";



    //$yazi değişkeninin içerisinde kullanılan karakter sayısını ekrana yazdırınız:
    echo "<b> \$yazi Değişkenin içerisindeki karakter sayısı: </b>" . strlen($yazi);
    echo "<br><br>";



    //$yazi değişkeninin ilk 21 karakterini ekrana yazdırınız.
    echo "<b> \$yazi Değişkenin içerisindeki ilk 21 karakter: </b>" . substr($yazi, 0, 21);
    echo "<br><br>";

    ?>


    <hr>
    <h3>Devamını Oku Uygulaması</h3>
    <h4>Uygulama Açıklaması:
        Metnin ilk 200 karakterini göstererek DEVAMINI OKU butonu eklenecektir.
        Butona tıklandığında yeni bir sekmede üniversitenin web sitesi açılacaktır.
    </h4>

    <?php
    echo "<br> ÖDEV: <br>";
    $metin = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quaerat! Nulla vitae, ipsa debitis odio doloremque saepe rerum ea eos nisi quae laboriosam omnis, deserunt ab adipisci magnam accusamus blanditiis?Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus facere, ratione alias sit unde omnis quam temporibus vel aperiam neque, cupiditate consequatur ad dicta? Quis in rerum repudiandae suscipit explicabo.";

    echo  substr($metin, 0, 200);
    //<a href="https://www.adu.edu.tr" target="_blank"> Adu Burada</a>
    ?>
    <form action="https://www.adu.edu.tr" target="_blank">
    <button >DEVAMINI OKU</button>
</form>
<br> ÖDEV BİTTİ: <br>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>