<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // if-else
    // if-else if-else 
    // ternary
    // swicth

    // $umur =19;
    // if($umur == 20){
    //     echo "umur sama dengan 20";
    // }else if ($umur < 20){
    //     // true jika kondisi pertama tidak memenuhi
    //     echo "umur kurang dari 20";
    // }
    // else if ($umur < 30){
    //     // true jika kondisi pertama tidak memenuhi
    //     echo "umur kurang dari 30";
    // }
    // else{
    //     echo "umur lebih dari 30";
    // }

    //ternary
    // $umur= 19;
    // echo($umur < 30 ? "umur kurang dari 30" : "umur lebih dari 30") ;

    //swich
    $umur = 16;
    switch($umur){
        case  15:
        case  16:
        case  17:
        case  18:
        case  19:
            echo "umur di bawah 20 di atas 14";
            break;
        case 20 :
            echo "umur 20";
            break;
        default:
            echo "umur tidak terdefinisi";

    }
    ?>
</body>
</html>