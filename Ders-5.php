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
    <h4>Diziler-3</h4>


    <?php
    echo "<hr>";
    echo "<b>Dizilerde Sık Kullanılan Fonksiyonlar:</b>" . "<br>";

    //$sayilar = array(80, 10, 11, 12, 5, 4, 3, 22, 1, 89)
    $sayilar = [80, 10, 11, 12, 5, 4, 3, 22, 1, 89];

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "<br> Dizinin Sıralanmış Hali: <br>";
    sort($sayilar);
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "<br>Dizinin Büyüten Küçüğe Sıralanması: <br>";
    rsort($sayilar);
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    //Uyg: dizistr isminde bir dizi tanımlayarak 5 tane string değer (value) giriniz. Sonrasında sort ve rsort ile sıralayınız.
    echo "<br> ÖDEV: <br>";
    
    $dizistr = array( "Ayşe", "Meltem", "Gevrek", "Fatih", "Sultan");

    echo "<br> sort ile sıraladım: <br>";
    sort($dizistr);
    echo "<pre>";
    print_r($dizistr);
    echo "</pre>";

    echo "<br> rsort ile sıraladım: <br>";
    rsort($dizistr);
    echo "<pre>";
    print_r($dizistr);
    echo "</pre>";

    echo "<br> ÖDEV BİTTİ: <br>";

    echo " <br> Dizinin İçerisinde Arama İşlemi Yapma : <br> ";
    $harfler = array("a", "b", "c", "d", "e"); //Değer yoksa boş varsa 1 döner.
    echo in_array("a", $harfler);

    $sonuc = in_array("a", $harfler);

    echo "<br>";
    if (in_array("234", $harfler)) {
        echo "Aranılan harf bulundu - Durum1";
    } else {
        echo "Malesef aradığınızı bulamadık Durum1";
    }


    echo "<br>";
    if ($sonuc) {
        echo "Aranılan harf bulundu - Durum2";
    } else {
        echo "Malesef aradığınızı bulamadık Durum2";
    }



    echo "<br><br><br><br><br>";
    echo "Dizinin Indislerindeki Elemanlarının Birleştirilmesi (implode) : " . "<br>";



    $dizibir = array("php", "java", "asp", "web prog.");
    echo "<pre>";
    print_r($dizibir);
    echo "</pre>";

  
    $dersler= implode("-" , $dizibir);
    echo $dersler . "<br>";

    $dersler= implode(" " , $dizibir);
    echo $dersler . "<br>";

    $dersler= implode("," , $dizibir);
    echo $dersler . "<br>";


    echo "<br><br><br><br><br>";
    echo "Değişkeni parçalayarak dizine dönüştürür. (explode) : " . "<br>";
    echo "Parçalanarak Diziye Dönüştürülecek Değişken : " . $dersler;

    $dersDizisi=explode(",",$dersler);

    echo "<pre>";
    print_r($dersDizisi);
    echo "</pre>";

    echo $dersDizisi[2];


















    ?>





    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>