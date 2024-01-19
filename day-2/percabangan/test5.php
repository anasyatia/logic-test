<?php

    $minimal = 100000;
    $diskon = 0.07;
    $totalandi = 154000;
    $total;
    $totalduit;

    if($totalandi >= $minimal) {
        $total = $totalandi * $diskon;
        $totalduit = $totalandi - $total;
        echo "Harga yang harus dibayar Andi adalah Rp" . number_format($totalduit, 2, ',', '.');
    } else {
        echo "kureng";
    }

?>