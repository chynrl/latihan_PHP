<?php
    if(!isset($_GET['nama']) || 
    !isset($_GET['kota']) ||
    !isset($_GET['kontak']) 
    ){
        header("Location: getpost.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $_GET['nama'];?></h3>
    <h3><?php echo $_GET['kota'];?></h3>
    <h3><?php echo $_GET['kontak'];?></h3>
    <a href="./getpost.php">Kembali</a>
</body>
</html>