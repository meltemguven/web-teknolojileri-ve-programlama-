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
    <h4>Diziler-2</h4>


    <?php

    $sayilar = array(1, 2, 3, 4, 5);

    $sayilar = [1, 2, 3, 4, 5];
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    $bilgiler = array(
        "id"    =>   1,
        "adi"   =>  "Kemal",
        "soyadi" =>  "Durmaz",
        "cins"  =>  "Erkek",
        "yas"   =>  23
    );

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo $bilgiler["adi"] . " " . $bilgiler["soyadi"];

    echo "<br><br>";

    echo "<br><br><br><br>Foreach Döngüsü Yardımıyla Dizinin İçeriğinin Yazdırılması:<br>";

    foreach ($bilgiler as $bilgi) {
        echo $bilgi . "<br>";
    };

    echo "<br><br>";

    foreach ($bilgiler as $key => $value) {
        echo "$key -- $value <br>";
    };


    $isimler[] = "Mehmet";
    $isimler[] = "Ayşe";
    $isimler[] = "Kerim";
    $isimler[] = "Fatma";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    $isimler["isim1"] = "Mehmet";
    $isimler["isim2"] = "Ayşe";
    $isimler["isim3"] = "Kerim";
    $isimler["isim4"] = "Fatma";
    $isimler[3] = "Elif";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    /* Çok Boyutlu Diziler:  */

    $bilgiler = array(
        "id"    =>   1,
        "adi"   =>  "Kemal",
        "soyadi" =>  "Durmaz",
        "cins"  =>  "Erkek",
        "yas"   =>  23,
        array("php", "asp", "laravel")
    );

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";


    echo "1. Boyuttaki Elemana Erişim:" . $bilgiler["adi"] . "<br>";
    echo "2. Boyuttaki Elemana Erişim:" . $bilgiler[0][1] . "<br>";




    echo "<br><br>";
    echo "<br><br>";

    $bilgiler = array(
        "id"    =>   1,
        "adi"   =>  "Kemal",
        "soyadi" =>  "Durmaz",
        "cins"  =>  "Erkek",
        "yas"   =>  23,
        "dersler" =>
        array(
            "php",
            "asp",
            "laravel"
        )
    );

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo "1. Boyuttaki Elemana Erişim:" . $bilgiler["adi"] . "<br>";
    echo "2. Boyuttaki Elemana Erişim:" . $bilgiler["dersler"][0] . "<br>";
























    /* Renklerin bulunduğu bir diziyi select içerisinde foreach kullanarak option değerlerini oluşturunuz. */
    $renkler = ["mavi", "mor", "yeşil", "sarı" , "kırmızı"];
    echo "<pre>";
    print_r($renkler);
    echo "</pre>";


    ?>


    <form action="">

        <select name="renkler">
            <?php foreach ($renkler as $key => $value) { ?>

                <option value="0"> Değer </option>

            <?php    }  ?>
        </select>

    </form>





    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>