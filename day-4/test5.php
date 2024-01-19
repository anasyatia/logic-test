<?php

$angka = [
    [
        'angka1' => [1, 2, 3],
        'angka2' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    ]
];

function perkalian($angka1, $angka2) {
    $hasil = [];
    foreach ($angka1 as $a) {
        foreach ($angka2 as $b) {
            $hasil[] = "$a x $b = " . ($a * $b);
        }
    }
    return $hasil;
}

$hasilPerkalian = perkalian($angka[0]['angka1'], $angka[0]['angka2']);

// Menampilkan hasil perkalian
foreach ($hasilPerkalian as $hasil) {
    echo $hasil . "<br>";
}

?>
