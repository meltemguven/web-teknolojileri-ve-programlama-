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
    <h4>Diziler</h4>

    <ol>
        <li>Dizi oluşturmak için array fonksiyonu veya [] kullanılır.</li>
        <li>Dizilerin içerisinde farklı türde birden çok değer bulunabilir. ("php","java",10,20)</li>
        <li>echo $dizi_ismi şeklinde ekrana yazdırılamaz. Bu komutun sonucu sadece ekrana (Array to string conversion)ARRAY yazar. Diziyi Ekrana Yazdırır: print_r($dizi) </li>
        <li>Dizi içerisindeki indisler tek olarak da çağırılabilir. Yani sadece 3. indisli dizi elamanına ulaşılabilir. Dizinin sadece istenilen elemanına erişmek için echo komutu kullanılır. Dizinin Elemanını Ekrana Yazdırır: echo $dizi[2]</li>
        <li>Dizi içerisinde metinsel ifadeler çift tırnak ile oluşturulur.</li>
        <li>Dizi içerisinde sayısal ifadeler herhangi bir parantez veya tırnak işaretine gerek kalmadan virgülle ayrılarak yazılabilir.</li>
        <li>Dizi içerisindeki indisler varsayılan olarak 0'dan başlar .</li>
        <li>Diziler içerisinde yeni diziler oluştulabilir.</li>

    </ol>

    <?php

    $dizi1 = array(1, 2, 3, "Ali", "Ahmet", "Kemal");
    $dizi2 = ["php", "java", 10, 20];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "Dizi2'in 3. Elmanı: " . $dizi2[3];

    echo "<br><br><br><br>";
    
    echo "Dizi1'in 0. İndisi: <b>" . $dizi1[0] . "</b><br>";
    echo "Dizi1'in 1. İndisi: <b>" . $dizi1[1] . "</b><br>";
    echo "Dizi1'in 2. İndisi: <b>" . $dizi1[2] . "</b><br>";
    echo "Dizi1'in 3. İndisi: <b>" . $dizi1[3] . "</b><br>";
    echo "Dizi1'in 4. İndisi: <b>" . $dizi1[4] . "</b><br>";
    echo "Dizi1'in 5. İndisi: <b>" . $dizi1[5] . "</b><br>";


 $x=10; $y=5; echo $x*=$y;

 echo "Sonuc=" . " 100-1";
    ?>








    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>