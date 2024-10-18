<?php
// single comment
#  ini juga comment sih
/**
 * Multi line commet  komentar line 1
 * komentar line 2
*/

#STANDAR OUTPUT

// menampilkan kalimat (string)
# gunakan \n untuk enter ke bawah
// gunakan <br> untuk di browser
// gunakan . untuk menggabungkan kalimat
    // echo "Nurul Cahyani ". "(by echo) \n";
    // echo "<br/>";
//     print "Nurul ". "(by print) \n"; 
//     //print_r, var_dump adalah fungsi build-in dari php
//     //memberikan nilainya, bisa digunakan untuk menampilkan string array, dsb
//     print_r("Nurul Cahyani "."(by print_r) \n");
//     // khusus untuk analisa data atau untuk programmer
//     var_dump("Nurul Cahyani "."(by var_dump)")
    // $string1 = "Nurul Cahyani";
    // $string2 = " (Menggunakan variabel terpisah)";

    // echo $string1.' '.$string2. "\n";

    // echo 12 +8 ."\n"; //integer

    // echo "12" + 8 . "\n"; //string

    // $x=5;
    // $y=10;
    // $hasilxy=$x * $y;
    // echo "Hasil kali " . $x . " x " . $y . " = " . $hasilxy . "\n";

    // echo "Operasi aritmatika";
    // echo "\n";
    // echo 5 + 5;
    // echo "\n";
    // echo 5 - 5;
    // echo "\n";
    // echo 5 * 5;
    // echo "\n";
    // echo 5 / 5;
    // echo "\n";
    // echo 5 % 5;
    // echo "\n";

    // // biasanya untuk menggabungkan tag HTML pada logic
    // $a = "<div>";
    // $a .= "<h3>Nuy</h3>";
    // $a .= "<p>Nuyyah</p>";
    // $a .= "</div>";

    // echo $a;

    //BOOLEAN
    // var_dump(1 === "1");

    /**
     * Operator
     * && (and)
     * || (or)
     * ! not
     * 
     */

    //  $umur=17;

    //  var_dump($umur < 20 && $umur >= 16);

    //  $nama = "NCC";
    //  var_dump($nama == "NC");

    //  $cek = "";
    //  var_dump($cek);

    $nama = "Nurul Cahyani";
    $umur = "23";
    $birthday = "18-11-2000";


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
        <li>Nama : <?= $nama; ?></li>
        <li>Umur : <?= $umur; ?></li>
        <li>Tanggal Lahir : <?= $birthday; ?></li>
        <li>5 x 5 adalah <?= 5*5; ?></li>
        </ul>
    </body>
    </html>