<?php
//$_GET & $_POST adalaha variabel super global
// yang membawa banyak data yang terjadi di aplikasi

// $_GET passing data melalui url 
    // $_GET["nama"] = "Nurul Cahyani";
    // $_GET["alamat"] = "Bandung";
    // var_dump($_GET);

    $arr = [
        [
            "nama"=> "Nurul Cahyani",
            "kota" => "Bandung",
            "kontak" => 123456789,
        ],
        [
            "nama"=> "Hayya",
            "kota" => "Banten",
            "kontak" => 8729857928,
        ],
        [
            "nama"=> "Naina",
            "kota" => "Jakarta",
            "kontak" => 28598197,
        ],
    ]
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
        <?php foreach($arr as $person): ?>
            <li>
                <a 
                href="./get.php?nama=<?= $person['nama'];?>&kota=<?= $person['kota']?>&kontak=<?= $person['kontak']?>">
                <?= $person['nama'];?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <hr>

    <form method="POST">
        <input type="text" 
        name = "txt_username"
        placeholder="username" />
        <input type="password" 
        name = "txt_password"
        placeholder="password"/>

        <button type="submit">SUBMIT</button>
    </form>

    <?php if(isset($_POST['txt_username'])): ?>
        <h3>Hallo, <?php echo $_POST['txt_username']; ?> </h3>
    <?php endif; ?>
</body>
</html>