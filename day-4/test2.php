<?php

    $bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
    $nilaikompeten = [];
    $nilaitidakkompeten = [];

    foreach ($bilangan as $angka) {
        if ($angka >= 75) {
            echo "Nilai kamu : ", $angka, ". Selamat, kamu kompeten!";
            echo '<br>';
            array_push($nilaikompeten, $angka);
        } else {
            echo "Nilai kamu : ", $angka, ". Waduh, kamu tidak kompeten...";
            echo '<br>';
            array_push($nilaitidakkompeten, $angka);
        }
    }

    echo '<hr>';

    echo "Kelompok kompeten : ";
    foreach ($nilaikompeten as $nilai) {
        echo $nilai, " ";
    }

    echo '<br>';

    echo "Kelompok tidak kompeten : ";
    foreach ($nilaitidakkompeten as $nilai) {
        echo $nilai, " ";
    }

?>
