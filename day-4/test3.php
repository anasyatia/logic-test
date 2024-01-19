<?php

    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    $kelompok1 = array_intersect($bil1, $bil2);
    // array_intersect adalah fungsi yang digunakan untuk membandingkan value dari dua array lalu diambil yang valuenya sama
    $kelompok2 = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));
    // array_merge untuk menyatukan, array diff untuk membandingkan lalu diambil value nya yang gaada di array lainnya

    echo "Kelompok Pertama: ";
    foreach ($kelompok1 as $nilai) {
        echo $nilai, " ";
    }

    echo "<br>";

    echo "Kelompok Kedua: ";
    foreach ($kelompok2 as $nilai) {
        echo $nilai, " ";
    }

?>
