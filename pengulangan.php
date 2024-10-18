<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<body>
    <?php
    for($i=0; $i < 5; $i++){
        echo "<p> Ini pengulangan for ke ". $i ."</p>";
    }
    ?>
    <hr>
    <?php
        $a =0;
        while($a < 5){
            echo "<p> Ini pengulangan while ke $a</p>";
            $a++;
        }
    ?>
    <hr>
    <?php
         $b =0;
        do{
            echo "<p> Ini pengulangan do while ke $b</p>";
            $b++;
        }while($b < 5);
    ?>
</body>
</html>