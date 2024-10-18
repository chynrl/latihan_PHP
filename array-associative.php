<?php
    $arr = [
        ["senin", "selasa", "rabu"],
        ["januari", "februari", "maret"],
        ["2020", "2021", "2022"],
    ];

    $dataPerson = [
        [
            "nama" => "Nurul Cahyani",
            "kota" => "Bandung",
            "baju" => "Hitam",
            "makanan_favorit" => ["Bakso", "Ramen", "cuanki"],
        ],
        [
            "nama" => "Ahmad Dahlan",
            "kota" => "Bandung",
            "baju" => "Biru",
            "makanan_favorit" => ["nasi padang"],
        ],
        [
            "nama" => "Aisyah",
            "kota" => "Bandung",
            "baju" => "Merah",
            "makanan_favorit" => ["semangka", "melon"],
        ]
    ]

    // foreach($arr as $data){
    //     var_dump ($data);

    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php 
    foreach($arr as $data): ?>
        <ul style="margin-bottom: 24px;">
                <li>Index 1 : <?= $data[0]; ?></li>
                <li>Index 2 : <?= $data[1]; ?></li>
                <li>Index 3 : <?= $data[2]; ?> </li>
        </ul>
    <?php endforeach?> -->
<!-- 
        <?php 
        echo $dataPerson[0]['nama'];
        ?> -->

        <?php foreach($dataPerson as $data): ?>
            <ul>
                <li> Nama : <?php echo $data['nama']; ?></li>
                <li> Kota : <?php echo $data['kota']; ?></li>
                <li> Baju : <?php echo $data['baju']; ?></li>
                <li>Makanan Favorit:
                    <ol>
                        <?php foreach($data['makanan_favorit'] as $makanan): ?>
                            <li> <?php echo $makanan; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </li>
            </ul>
        <?php endforeach; ?>
    
</body>
</html>