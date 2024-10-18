<?php
    function salam($nama, $pembelajaran){
        return "Selamat datang di belajar ". $pembelajaran . ", " . $nama;
    }

    function hitungUang($nominal, $jumlah){
        $num = $nominal * $jumlah;
        $stringReturn ="Rp " . number_format($num, 0, ',' , '.');
        return $stringReturn;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?php echo salam("Nurul", "Programming ");?></h1>
    <h3> <?php echo "Jumlah uangnya adalah " . hitungUang(50000, 5); ?></h3>
</body>
</html>