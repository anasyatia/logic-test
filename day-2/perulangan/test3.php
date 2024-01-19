<?php

    $mtkandi = 83;
    $indoandi = 87;
    $ingandi = 86;
    $umurandi = 25;
    $total = $mtkandi + $indoandi + $ingandi;
    $ratarata = $total / 3;

    if($umurandi >= 16 && $umurandi <= 25) {
        if($mtkandi >= 87 && $indoandi >= 87 && $ingandi >= 85 && $ratarata >= 85) {
            echo "Kamu lolos";
        } else {
            echo "Gak lolos, coba lain kali";
        }
    } else {
        echo "Umur kamu tidak mencukupi";
    }

?>