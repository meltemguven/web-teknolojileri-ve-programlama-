<html>

<head>
    <!-- Açıklama Satırı :   Shift + Alt + A -->
    <!-- Web Sitesi Head Bloğu -->
    <title>Web Programlama Dersi</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Web, Php, Mvc, Programlama">
    <meta name="description" content="Abc Firması ... Alanda ... yılından beri hizmet vermektedir.">
    <meta name="author" content="... Yazılım">

</head>

<body>
<h4>Php Programlama</h4>
    <!--HTML Açıklama Satırıdır -->
    <?php
    /* Php Açıklama Satırları*/
    //Tek Satır Açıklama

    echo "<h3>Php Dersi</h3>";
    echo "<h3>ADÜ - Aymes </h3> <hr>" . "Bilgisayar Programcılığı";
    //echo "<h3>ADÜ - Aymes </h3> <hr> Bilgisayar Programcılığı";

    echo "<h3>Değişken Tanımlamada Dikkat Edilecek Hususlar</h3>";

    echo "<ol>
    <li>Php'de değişken isimleri $ işareti ile başlar.</li>
    <li>Php'de değişken isimleri sayısal ifadelerle başlamaz.</li>
    <li>Php'de değişken isimleri iki kelimeden oluşuyorsa - veya _ kullanılır.</li>
    <li>Php'de değişken isimlerinde Türkçe karakter kullanılmamalıdır(ö,ç,ğ,ü).</li>
    <li>Php'de değişken isimlerinde büyük-küçük harf duyarlılığı vardır.</li>
    <li>Php'de değişken içeriğinde eğer metinsel ifade varsa \" veya ' kullanılır.</li>
    <li>Php'de değişken içeriğinde eğer sayısal ifade tırnak kullanmadan direk yazılır.</li>
   </ol>";

    echo "<h3>Değişken Tanımlama Örnekleri</h3>";
    $universite="Aydın Adnan Menderes";
    $myo="Bilgisayar Programcılığı";
    $isim="Meltem";
    $soyisim="Güven";
    $no=206001039;


    echo "$isim $soyisim <br>" ; //echo $isim . " " .$soyisim ;
    ?>
   <hr>
    <h3>Kişisel Bilgiler Ödevi</h3>
    <table border="3" width="20%">
    
        <tbody>
            <tr>
                <td>Üniversite</td>
                <td><?php echo $universite; ?></td>
            </tr>
             <tr>
                <td>MYO</td>
                <td><?php echo $myo; ?></td>
            </tr>
            <tr>
                <td>İsim</td>
                <td><?php echo $isim; ?></td>
            </tr>
            <tr>
                <td>Soyisim</td>
                <td><?php echo $soyisim; ?></td>
            </tr>
            <tr>
                <td>NO</td>
                <td><?php echo $no; ?></td>
            </tr>
        </tbody>
    </table><hr>
    <?php 
    echo "<h3>Matematiksel İşlemler</h3>";
    echo "<h5>Toplama İşlemi</h5>";

    $sayi1=12; 
    $sayi2=25;
    echo "$sayi1 + $sayi2 =" ; 
    echo $sayi1 + $sayi2  ; 

    echo "<br>";

    $sonuc = $sayi2 + $sayi1; 
    echo "<br>";
    echo "$sayi1 + $sayi2 = $sonuc" ; 

    echo "<h5>Çıkarma İşlemi</h5>";

    $sayi1=12; 
    $sayi2=25;
    echo "$sayi1 - $sayi2 =" ; 
    echo $sayi1 - $sayi2  ; 

    echo "<br>";

    $sonuc = $sayi2 - $sayi1; 
    echo "<br>";
    echo "$sayi1 - $sayi2 = $sonuc" ; 

    echo "<h5>Çarpma İşlemi</h5>";

    $sayi1=12; 
    $sayi2=25;
    echo "$sayi1 * $sayi2 =" ; 
    echo $sayi1 * $sayi2  ; 

    echo "<br>";

    $sonuc = $sayi2 * $sayi1; 
    echo "<br>";
    echo "$sayi1 * $sayi2 = $sonuc" ; 

    echo "<h5>Bölme İşlemi</h5>";

    $sayi1=12; 
    $sayi2=25;
    echo "$sayi1 / $sayi2 =" ; 
    echo $sayi1 / $sayi2  ; 

    echo "<br>";

    $sonuc = $sayi2 / $sayi1; 
    echo "<br>";
    echo "$sayi1 / $sayi2 = $sonuc" ; 

    echo "<h3>Tırnaklar Arasındaki Fark</h3>";
    $universite="Adnan Menderes Üniversitesi";
    echo "$universite'ni bu sene kazandım.";/*Değişken İçeriği Okunur*/
    echo "<br>";
    echo '$universite\'ni bu sene kazandım.';/*Değişken İsmi Yazılır*/

    echo "<h3>Atama Öperatörleri</h3>";
    $sayi=300;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi +=300;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi -= 50; //$sayi=$sayi+300
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi /= 5;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi *=15;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi ++ ;//$sayi=$sayi+1
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi -- ;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    -- $sayi ;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    ++ $sayi ;//$sayi=$sayi+1
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    echo "<h3>Hazır Fonksiyonlar</h3>";

    echo "<h5>Rand</h5>";
    /*Rasgele sayı üretir. */

    $sayi=rand(0,100);
    echo "\$sayi değişkeni içerisindeki rasgele üretilen değer : $sayi <br>";
    
    ///Örn: Rasgele 0-100 arasında üretilen değer eğer 50'den küçükse kaldı, değilse geçti yazsın.

    if ($sayi >= 50)
    {
        echo "Geçti - Notunuz: $sayi";
    }
    else
    {
        echo "Kaldı - Notunuz: $sayi";
    }
    ?>
   
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>