<?php

$angka1 = 1000;
$angka2 = [3, 5, 7, 10];

function hitungPembagian($angka1, $angka2) {
    $result = [];

    foreach ($angka2 as $pembagi) {
        if ($angka1 % $pembagi == 0) {
            $result[] = $pembagi;
        }
    }

    return $result;
}

function cetakHasil($result) {
    if (empty($result)) {
        echo "Angka 1000 tidak bisa dibagi oleh angka 3, 5, 7, dan 10.";
    } else {
        echo "Angka 1000 bisa dibagi dengan angka " . implode(', ', $result);
    }
}

$result = hitungPembagian($angka1, $angka2);
cetakHasil($result);

?>
