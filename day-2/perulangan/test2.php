<?php

    $angka = 90;

    for ($i = 3; $i <= 30; $i+=3) {
        if($angka % $i == 0) {
            echo $i;
        }
    };

?>