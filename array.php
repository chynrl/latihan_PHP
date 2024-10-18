<?php
     $arr1 = array("senin", "selasa", "rabu");

     $arr2 = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu"];

    //echo bekerja untuk string/integer
    // khusus debugging atau developer
    // untuk menampilkan array gunakan var_dump atau print_r
    //  var_dump($arr2);
    //  echo "<br/>";
    //  print_r($arr1);
    //  echo "<br/>";]

    for($i=0; $i < count($arr2); $i++){
        echo $arr2[$i];
        echo "<br/>";
    }
    echo "<hr/>";
    foreach($arr2 as $hari){
        echo $hari . "<br/>";
    }
?>