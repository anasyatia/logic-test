<?php

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10
    ],
    [
        'nama' => 'Oli Mesin',
    ],
    [
        'nama' => 'Kampas Rem',
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7
    ],
];

echo "Barang dengan diskon: ";
echo '<br><hr>';

foreach ($barang as $item) {
    if (array_key_exists('diskon', $item)) {
        echo "Nama: " . $item['nama'] . "<br>" . "Diskon: " . $item['diskon'] . "%<br>";
    }
}

// array key exist untuk memeriksa ada atau nggaknya key diskon dalam array $barang, kalo nggak ada, ngga ke cetak

?>
