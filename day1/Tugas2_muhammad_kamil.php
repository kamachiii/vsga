<?php
    $i = 1;
    $k = 100;

    echo "<h3>URUTKAN BILANGAN</h3>";
    for($i; $i <= $k; $i++) {
        echo "$i adalah bilangan ";
        echo $i % 2 == 0 ? "genap" : "ganjil";
        echo "<br>" ;
    }
?>
