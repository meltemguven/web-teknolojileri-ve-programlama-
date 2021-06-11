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
    <h4>IF - ELSE</h4>

    <p>Önce Şart belirtilir sonra süslü parantezler içerisine yapılması gereken belirtilir.</p>

    <p>Karşılaştırma Operatörleri: </p>
    <ol>
        <li> == ($a == $b) > Eşit ise (Genellikle matematiksel işlemlerde tercih edilir.)</li>
        <li> != ($a != $b) > Eşitdeğildir. </li>
        <li> === ($a === $b) > Denk ise (string terimlerde kullanılır.)</li>
        <li> !== ($a !== $b) > Denk değildir. </li>
        <li> > ($a > $b) Büyük ise</li>
        <li> >= ($a >= $b) Büyük yada eşit ise</li>
        <li>
            < ($a < $b) Küçük ise</li>
        <li>
            <= ($a <=$b) Küçük yada eşit ise</li>
    </ol>

    <p>Mantıksal Operatörler: </p>

    <ol>
        <li> ! Olumsuzsa (!$a) --> $a’nın değeri olumsuz yani FALSE ise TRUE yani doğru döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && Ve ($a && $b) --> $a ve $b’nin değeri olumlu ise olumlu yani TRUE döner, ikisinden birisi olumsuz ise olumsuz yani FALSE döner.</li>
        <li> || Ya da ($a || $b) --> $a’nın değeri ya da $b’nin değeri olumlu ise olumlu döner. Birisinin ya da ikisininde olumlu olması yeterlidir.</li>
    </ol>

    <p>Not: </p>
    <ul>
        <li> elseif sürekli tekrar eden sorgu açar.</li>
        <li> else son kapanış koşuludur. (Herhangi bir şart içermez, yukarıda verilen hiçbir şart sağlanmazsa döngü buraya girer ve sonlanır.)</li>
    </ul>

    <?php

    /* 
        if (condition) {
            # code...
        } elseif (condition) {
            # code...
        } elseif (condition) {
            # code...
        } else {
        }
    */



    $sayi1 = 123;
    $sayi2 = 55;
    $sayi3 = 123;
    $ders = "Php Programlama";

    echo "<h3> IF Uygulama-1:   </h3> <hr>";
    echo "\$sayi1 = $sayi1  -----  \$sayi2 = $sayi2 ----- \$ders = $ders  <br><br>";


    /* sayı1 içerisinde bir değer varsa */
    if ($sayi1) {
        echo "<b>Bu şart içindeki \$sayi1 değişkenin değeri vardır: </b> $sayi1" . "<br>";
    }

    /* Eşitlik varsa */
    if ($sayi1 == 123) {
        echo "<b>Bu şart içindeki değer \$sayi1 değişkenine eşit: </b> $sayi1" . "<br>";
    }

    /* Eşitlik yoksa */
    if ($sayi1 != $sayi2) {
        echo "<b>Bu şart içindeki değer \$sayi1 değişkenine eşit değilse: </b> $sayi1" . "<br>";
    }

    //İki Şarttan hepsi geçerli olmalı.
    if ($sayi1 == 123 and $sayi3 > $sayi2) {
        echo "Koşul sağlandı - AND <br>";
    }

    if ($sayi1 == 123 && $sayi3 == 123) {
        echo "Koşul sağlandı - && <br>";
    }


    //İki Şarttan en az birisi geçerli olmalı.
    if ($sayi1 == 123 or $sayi3 == 11) {
        echo "Koşul sağlandı  OR <br>";
    }

    if ($sayi1 == 123 || $sayi3 == 11) {
        echo "Koşul sağlandı  ||  <br>";
    }


    /* String üzerinde denklik örneği */
    if ($ders === "Php Programlama") {
        echo "<b> Bu şart içindeki değer \$ders değişkeninin aynısı: </b>  $ders " . "<br>";
    }


    if ($sayi1 > $sayi2) {
        echo "<b> \$sayi1 değişkeni \$sayi2 değişkeninden büyük: </b> $sayi1 >  $sayi2" . "<br>";
    }

    if ($sayi2 < $sayi1) {
        echo "<b> \$sayi2 değişkeni \$sayi1 değişkeninden küçük: </b> $sayi2 < $sayi1" . "<br>";
    }

    if ($sayi1 >= $sayi3) {
        echo "<b> \$sayi1 değişkeni \$sayi3 değişkenine eşit yada büyük: </b> $sayi1 >= $sayi3" . "<br>";
    }

    if ($sayi2 <= $sayi3) {
        echo "<b> \$sayi2 değişkeni \$sayi3 değişkenine eşit yada küçük: </b> $sayi2 <= $sayi3" . "<br>";
    }


    echo "<h3> If Uygulama-2: Değerin 0-100 arasında olup olmadığının kontrolü:</h3> <hr>";
    $sayi = rand(0, 180);
    if ($sayi < 100 and $sayi > 0) {
        echo "Bu sayı 0-100 arasındadır ($sayi)";
    } else {
        echo "Bu sayı 0-100 arasında değildir. ($sayi)";
    }


    echo "<br><br><br><br><br><br>";
    echo "<h3> If Uygulama-3: Doğum Yılına Göre Ehliyet Alabilme Durum Kontrolü :</h3> <hr>";

    $yil = 2050;
    $dogum_yili = 2008;
    $yas = $yil - $dogum_yili;

    if ($yas > 18) {
        echo "Ehliyet Alabilirsiniz. Yaşınız: $yas";
    } else {
        $kalanYil = 18 - $yas;
        echo "Malesef ehliyet alamazsınız. Yaşınız: $yas  --- Ehliyet alabilmek için $kalanYil sonra başvuru yapabilirsiniz. ";
    }


    echo "<h3> If Uygulama-4: Yukarıdaki örneğin aynısını form üzerinden girilen verilere göre işleyiniz.   </h3> <hr>";

    ?>

    <form action="">
        <input type="text" name="birthday" placeholder="Doğum Yılınızı Giriniz.">
        <input type="submit" value="Gonder">
    </form>




    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>